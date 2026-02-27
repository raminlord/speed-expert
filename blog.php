<?php
$pageTitle = "وبلاگ | مقالات تخصصی سرعت و سئو";
$pageDescription = "وبلاگ تخصصی بهینه‌سازی سرعت سایت، سئو فنی، آموزش وردپرس و افزایش عملکرد وبسایت";
include 'header.php';
?>

    <section class="page-header">
        <div class="container">
            <h1>وبلاگ تخصصی</h1>
            <div class="breadcrumb">
                <a href="index.php">خانه</a> / <span>وبلاگ</span>
            </div>
        </div>
    </section>

    <section class="blog-page">
        <div class="container">
            <div class="blog-layout">
                <main class="blog-main">
                    
                    <!-- مقاله ۱ -->
                    <article class="blog-post">
                        <div class="blog-image-large">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="far fa-calendar"></i> ۱۵ دی ۱۴۰۴</span>
                                <span><i class="far fa-clock"></i> ۵ دقیقه</span>
                                <span><i class="far fa-folder"></i> <a href="#">سرعت سایت</a></span>
                            </div>
                            <h2>۱۰ روش تضمینی برای افزایش سرعت وردپرس</h2>
                            <p class="blog-excerpt">آیا سایت وردپرسی شما کند است؟ در این مقاله با ۱۰ روش عملی و تست شده آشنا می‌شوید که می‌توانید بلافاصله برای افزایش سرعت سایت خود اجرا کنید. از بهینه‌سازی تصاویر تا کش‌سازی حرفه‌ای...</p>
                            <a href="single.php?id=1" class="read-more">ادامه مطلب <i class="fas fa-arrow-left"></i></a>
                        </div>
                    </article>

                    <!-- مقاله ۲ -->
                    <article class="blog-post">
                        <div class="blog-image-large">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="far fa-calendar"></i> ۱۰ دی ۱۴۰۴</span>
                                <span><i class="far fa-clock"></i> ۷ دقیقه</span>
                                <span><i class="far fa-folder"></i> <a href="#">سئو</a></span>
                            </div>
                            <h2>چرا سرعت سایت در سئو اهمیت دارد؟</h2>
                            <p class="blog-excerpt">گوگل رسماً اعلام کرده که سرعت سایت یکی از فاکتورهای رتبه‌بندی است. در این مقاله تأثیر سرعت بر سئو و رتبه گوگل را بررسی می‌کنیم و می‌بینیم چطور گوگل سرعت را اندازه‌گیری می‌کند...</p>
                            <a href="single.php?id=2" class="read-more">ادامه مطلب <i class="fas fa-arrow-left"></i></a>
                        </div>
                    </article>

                    <!-- مقاله ۳ -->
                    <article class="blog-post">
                        <div class="blog-image-large">
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="far fa-calendar"></i> ۵ دی ۱۴۰۴</span>
                                <span><i class="far fa-clock"></i> ۴ دقیقه</span>
                                <span><i class="far fa-folder"></i> <a href="#">تصاویر</a></span>
                            </div>
                            <h2>آموزش بهینه‌سازی تصاویر برای وب</h2>
                            <p class="blog-excerpt">تصاویر سنگین یکی از دلایل اصلی کندی سایت هستند. با این تکنیک‌ها تصاویر خود را بهینه کنید و حجم آنها را تا ۸۰٪ کاهش دهید بدون اینکه کیفیت تصویر افت کند...</p>
                            <a href="single.php?id=3" class="read-more">ادامه مطلب <i class="fas fa-arrow-left"></i></a>
                        </div>
                    </article>

                    <!-- صفحه‌بندی -->
                    <div class="pagination">
                        <a href="#" class="active">۱</a>
                        <a href="#">۲</a>
                        <a href="#">۳</a>
                        <a href="#"><i class="fas fa-arrow-left"></i></a>
                    </div>
                </main>

                <aside class="blog-sidebar">
                    <!-- جستجو -->
                    <div class="sidebar-widget search-widget">
                        <h3>جستجو</h3>
                        <form class="search-form" method="get" action="search.php">
                            <input type="text" name="q" placeholder="عبارت مورد نظر...">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                    </div>

                    <!-- دسته‌بندی -->
                    <div class="sidebar-widget categories-widget">
                        <h3>دسته‌بندی</h3>
                        <ul>
                            <li><a href="#">سرعت سایت</a> (۱۲)</li>
                            <li><a href="#">سئو فنی</a> (۸)</li>
                            <li><a href="#">وردپرس</a> (۱۰)</li>
                            <li><a href="#">بهینه‌سازی تصاویر</a> (۵)</li>
                            <li><a href="#">Core Web Vitals</a> (۷)</li>
                            <li><a href="#">آموزش CSS</a> (۷)</li>
                        </ul>
                    </div>

                    <!-- مقالات پربازدید -->
                    <div class="sidebar-widget popular-widget">
                        <h3>مقالات پربازدید</h3>
                        <ul>
                            <li><a href="#">افزایش سرعت وردپرس با ۵ ترفند ساده</a></li>
                            <li><a href="#">آموزش فشرده‌سازی تصاویر در فتوشاپ</a></li>
                            <li><a href="#">Core Web Vitals چیست؟</a></li>
                            <li><a href="#">تفاوت LCP و FID در سئو</a></li>
                            <li><a href="#">بهترین افزونه‌های کش وردپرس</a></li>
                        </ul>
                    </div>

                    <!-- برچسب‌ها -->
                    <div class="sidebar-widget tags-widget">
                        <h3>برچسب‌ها</h3>
                        <div class="tags">
                            <a href="#">سرعت</a>
                            <a href="#">وردپرس</a>
                            <a href="#">سئو</a>
                            <a href="#">PageSpeed</a>
                            <a href="#">تصاویر</a>
                            <a href="#">کش</a>
                            <a href="#">LCP</a>
                            <a href="#">Core Web Vitals</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>