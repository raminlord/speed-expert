<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

$data = json_decode(file_get_contents('php://input'), true);

$name = $data['name'] ?? '';
$email = $data['email'] ?? '';
$website = $data['website'] ?? '';
$message = $data['message'] ?? '';

if (empty($name) || empty($email) || empty($message)) {
    http_response_code(400);
    echo json_encode(['error' => 'فیلدهای اجباری پر نشده‌اند']);
    exit;
}

$to = "your-email@gmail.com"; // ایمیل خودتو بذار
$subject = "پیام جدید از سایت - $name";
$body = "نام: $name\nایمیل: $email\nسایت: $website\n\nپیام:\n$message";
$headers = "From: $email";

if (mail($to, $subject, $body, $headers)) {
    echo json_encode(['success' => true, 'message' => 'پیام شما با موفقیت ارسال شد']);
} else {
    http_response_code(500);
    echo json_encode(['error' => 'خطا در ارسال ایمیل']);
}
?>
