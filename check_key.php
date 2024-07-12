<?php
$valid_keys = [
  "123123",
  "911"
  
  ];

$activation_code = isset($_POST['activation_code']) ? $_POST['activation_code'] : '';

if (in_array($activation_code, $valid_keys)) {
    $response = ['status' => 'valid'];
} else {
    $response = ['status' => 'invalid'];
}

header('Content-Type: application/json');
echo json_encode($response);
?>
