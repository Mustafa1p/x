<?php
// محتويات ملف active_keys.txt
$valid_keys = ["123123"];

// الحصول على المفتاح من طلب POST
$activation_code = isset($_POST['activation_code']) ? $_POST['activation_code'] : '';

if (in_array($activation_code, $valid_keys)) {
    $response = ['status' => 'valid'];
} else {
    $response = ['status' => 'invalid'];
}

header('Content-Type: application/json');
echo json_encode($response);
?>
