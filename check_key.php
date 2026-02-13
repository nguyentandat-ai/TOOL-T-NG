<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

// DANH SÁCH KEY CỦA MÀY (Thay đổi hoặc thêm ở đây)
$valid_keys = [
    "LUKZAN-VIP-123",
    "LUKZAN-PRO-888",
    "BOT-999"
];

$user_key = $_GET['key'] ?? '';

if (in_array($user_key, $valid_keys)) {
    echo json_encode(["status" => "success", "message" => "Key hợp lệ!"]);
} else {
    echo json_encode(["status" => "error", "message" => "Key sai hoặc hết hạn!"]);
}
?>
