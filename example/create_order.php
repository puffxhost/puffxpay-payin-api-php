<?php
require_once '../PayinAPI.php';

$response = PayinAPI::createOrder(
    '8145344963',
    '1.00',
    'ORDER' . time(),
    'https://your-redirect-url.com',
    'TestRemark1',
    'TestRemark2',
    1
);

echo "<pre>";
print_r($response);
