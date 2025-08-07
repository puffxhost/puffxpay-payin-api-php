<?php
require_once 'config.php';

class PayinAPI {

    public static function createOrder($mobile, $amount, $orderId, $redirectUrl, $remark1 = '', $remark2 = '', $route = 1) {
        $current_url = preg_replace('/^www\./', '', $_SERVER['HTTP_HOST']);

        $post_data = [
            'customer_mobile' => $mobile,
            'user_token' => PAYIN_API_TOKEN,
            'amount' => $amount,
            'order_id' => $orderId,
            'redirect_url' => $redirectUrl,
            'current_url' => $current_url,
            'remark1' => $remark1,
            'remark2' => $remark2,
            'route' => $route
        ];

        return self::sendRequest(API_CREATE_ORDER_URL, $post_data);
    }

    public static function checkStatus($orderId) {
        $post_data = [
            'user_token' => PAYIN_API_TOKEN,
            'order_id' => $orderId
        ];

        return self::sendRequest(API_CHECK_STATUS_URL, $post_data);
    }

    private static function sendRequest($url, $data) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/x-www-form-urlencoded'
        ]);

        $response = curl_exec($ch);
        if (curl_errno($ch)) {
            return ['status' => false, 'message' => curl_error($ch)];
        }
        curl_close($ch);
        return json_decode($response, true);
    }
}
