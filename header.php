<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- سئو -->
    <meta name="description" content="<?php echo $pageDescription ?? 'کارشناس ارتقای سرعت سایت و سئو فنی | بهینه‌سازی سایت وردپرسی برای کسب نمره ۱۰۰ در PageSpeed Insights'; ?>">
    <meta name="keywords" content="بهبود سرعت سایت, سئو فنی, بهینه سازی وردپرس, افزایش سرعت سایت">
    <meta name="author" content="[اسم شما]">
    
    <title><?php echo $pageTitle ?? 'صفحه اصلی | بهینه‌ساز سرعت و سئو فنی'; ?></title>
    
    <!-- فونت و آیکون -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- لینک CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- ========== منوی ناوبری ========== -->
    <nav class="navbar" id="navbar">
        <div class="nav-container container">
            <div class="logo">
                <a href="index.php">Speed<span>Expert</span></a>
            </div>
            <ul class="nav-menu" id="nav-menu">
                <li><a href="index.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">خانه</a></li>
                <li><a href="about.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">درباره من</a></li>
                <li><a href="services.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : ''; ?>">خدمات</a></li>
                <li><a href="portfolio.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'portfolio.php' ? 'active' : ''; ?>">نمونه کارها</a></li>
                <li><a href="blog.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'blog.php' ? 'active' : ''; ?>">وبلاگ</a></li>
                <li><a href="contact.php" class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">تماس</a></li>
            </ul>
            <div class="hamburger" id="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>