<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'status' => $_POST['status'],
        'order_id' => $_POST['order_id'],
        'customer_mobile' => $_POST['customer_mobile'],
        'amount' => $_POST['amount'],
        'remark1' => $_POST['remark1'],
        'remark2' => $_POST['remark2'],
    ];

    // You can log or store the data
    file_put_contents('webhook.log', json_encode($data) . PHP_EOL, FILE_APPEND);
    http_response_code(200);
    echo 'Webhook received';
} else {
    http_response_code(405);
    echo 'Only POST requests are allowed';
}
