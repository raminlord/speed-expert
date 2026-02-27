<?php
// CORS - اجازه دسترسی از هر جایی
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

// فقط POST قبول کن
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Method not allowed']);
    exit;
}

// دریافت داده‌ها
$data = json_decode(file_get_contents('php://input'), true);

$name = $data['name'] ?? '';
$email = $data['email'] ?? '';
$website = $data['website'] ?? '';
$message = $data['message'] ?? '';

// اعتبارسنجی
if (empty($name) || empty($email) || empty($message)) {
    http_response_code(400);
    echo json_encode(['error' => 'فیلدهای اجباری پر نشده‌اند']);
    exit;
}

// ارسال ایمیل
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

    <section class="page-header">
        <div class="container">
            <h1>تماس با من</h1>
            <div class="breadcrumb">
                <a href="index.php">خانه</a> / <span>تماس</span>
            </div>
        </div>
    </section>

    <section class="contact-page">
        <div class="container">
            <div class="contact-wrapper">
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h4>ایمیل</h4>
                            <p>reslami1360@gmail.com</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <div>
                            <h4>تلفن</h4>
                            <p>0914539332</p>
                        </div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h4>آدرس</h4>
                            <p>تهران، ایران (دورکاری در سراسر کشور)</p>
                        </div>
                    </div>
                    <div class="contact-social">
                        <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-github"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $name = $_POST['name'] ?? '';
                    $email = $_POST['email'] ?? '';
                    $website = $_POST['website'] ?? '';
                    $message = $_POST['message'] ?? '';
                    
                    // ایمیل به خودت
                    $to = "ramin.khoiee@gmail.com";
                    $subject = "پیام جدید از سایت - $name";
                    $body = "نام: $name\nایمیل: $email\nسایت: $website\n\nپیام:\n$message";
                    $headers = "From: $email";
                    
                    if (mail($to, $subject, $body, $headers)) {
                        echo '<div class="alert-success">پیام شما با موفقیت ارسال شد. به زودی با شما تماس می‌گیرم.</div>';
                    } else {
                        echo '<div class="alert-error">متأسفانه خطایی رخ داد. لطفاً دوباره تلاش کنید.</div>';
                    }
                }
                ?>
                
                <form class="contact-form" method="POST" action="">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="نام و نام خانوادگی" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" placeholder="ایمیل" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="website" placeholder="آدرس سایت شما">
                    </div>
                    <div class="form-group">
                        <textarea name="message" placeholder="توضیحات و درخواست شما" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">ارسال پیام</button>
                </form>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>