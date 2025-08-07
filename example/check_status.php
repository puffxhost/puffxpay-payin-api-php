<?php
require_once '../PayinAPI.php';

$response = PayinAPI::checkStatus('YOUR_ORDER_ID');
echo "<pre>";
print_r($response);
