<?php
// اینجا باید از دیتابیس مقاله رو بخونی
// فعلاً با مقادیر پیش‌فرض کار می‌کنیم
$post_id = $_GET['id'] ?? 1;

// آرایه مقالات (بعداً از دیتابیس میاری)
$posts = [
    1 => [
        'title' => '۱۰ روش تضمینی برای افزایش سرعت وردپرس',
        'date' => '۱۵ دی ۱۴۰۴',
        'category' => 'سرعت سایت',
        'category_link' => '#',
        'read_time' => '۵ دقیقه',
        'image' => 'fas fa-newspaper',
        'content' => '
            <p>آیا سایت وردپرسی شما کند است؟ کند بودن سایت نه تنها تجربه کاربری بدی ایجاد می‌کند، بلکه باعث کاهش رتبه شما در گوگل و کاهش فروش می‌شود. در این مقاله با ۱۰ روش عملی و تست شده آشنا می‌شوید که می‌توانید بلافاصله برای افزایش سرعت سایت خود اجرا کنید.</p>
            
            <h2>۱. استفاده از افزونه کش</h2>
            <p>افزونه‌های کش مانند WP Rocket، W3 Total Cache یا LiteSpeed Cache می‌توانند سرعت سایت شما را به طرز چشمگیری افزایش دهند. این افزونه‌ها نسخه‌ای ایستا از سایت شما ایجاد می‌کنند و به جای اجرای کدهای PHP، همان نسخه ایستا را به کاربر نمایش می‌دهند.</p>
            
            <h2>۲. بهینه‌سازی تصاویر</h2>
            <p>تصاویر سنگین یکی از بزرگترین دلایل کندی سایت هستند. قبل از آپلود تصاویر، آنها را با ابزارهایی مانند TinyPNG یا ShortPixel فشرده کنید. همچنین می‌توانید از فرمت مدرن WebP استفاده کنید که حجم بسیار کمتری نسبت به JPEG و PNG دارد.</p>
            
            <blockquote>
                <p>طبق آمار گوگل، ۵۳٪ از کاربران موبایل، سایتی را که بیشتر از ۳ ثانیه طول بکشد تا بارگذاری شود، ترک می‌کنند.</p>
            </blockquote>
            
            <h2>۳. فعال‌سازی Gzip Compression</h2>
            <p>فشرده‌سازی Gzip می‌تواند حجم فایل‌های ارسالی از سرور به مرورگر را تا ۷۰٪ کاهش دهد. بیشتر هاست‌ها و افزونه‌های کش این قابلیت را دارند.</p>
            
            <h2>۴. بهینه‌سازی پایگاه داده</h2>
            <p>با گذشت زمان، پایگاه داده وردپرس پر از اطلاعات اضافی مانند بازبینی‌های پست‌ها، نظرات اسپم و گزینه‌های موقت می‌شود. پاکسازی منظم پایگاه داده با افزونه‌هایی مانند WP-Optimize می‌تواند سرعت سایت را افزایش دهد.</p>
            
            <h2>۵. استفاده از CDN</h2>
            <p>شبکه‌های تحویل محتوا (CDN) مانند Cloudflare فایل‌های سایت شما را در سرورهای سراسر جهان ذخیره می‌کنند و از نزدیک‌ترین سرور به کاربر به او تحویل می‌دهند. این کار تأثیر زیادی در سرعت سایت برای کاربران خارج از ایران دارد.</p>
            
            <h2>۶. حذف کدهای غیرضروری</h2>
            <p>بسیاری از قالب‌ها و افزونه‌ها فایل‌های CSS و JavaScript اضافی لود می‌کنند. با ابزارهایی مانند Asset CleanUp می‌توانید این فایل‌های اضافی را در صفحاتی که نیازی به آنها نیست، غیرفعال کنید.</p>
            
            <h2>۷. بهینه‌سازی فونت‌ها</h2>
            <p>اگر از فونت‌های سفارشی استفاده می‌کنید، فقط وزن‌های ضروری را لود کنید. همچنین از ویژگی font-display: swap استفاده کنید تا متن بلافاصله نمایش داده شود.</p>
            
            <h2>۸. فعال‌سازی Lazy Load</h2>
            <p>با Lazy Load، تصاویر فقط وقتی لود می‌شوند که کاربر به آنها نزدیک شود. این کار سرعت بارگذاری اولیه صفحه را به شدت افزایش می‌دهد.</p>
            
            <h2>۹. کاهش درخواست‌های HTTP</h2>
            <p>هر چه فایل‌های بیشتری (CSS، JavaScript، تصاویر) لود شوند، درخواست‌های HTTP بیشتری به سرور ارسال می‌شود. سعی کنید فایل‌های CSS و JavaScript را ادغام کنید.</p>
            
            <h2>۱۰. انتخاب هاست مناسب</h2>
            <p>در نهایت، همه این بهینه‌سازی‌ها وقتی مؤثر هستند که هاست شما کیفیت مناسبی داشته باشد. هاست اشتراکی ارزان قیمت هرگز نمی‌تواند سرعت خوبی ارائه دهد.</p>
            
            <p>با اجرای این ۱۰ روش، می‌توانید سرعت سایت وردپرسی خود را به طرز چشمگیری افزایش دهید و نمره بالایی در Google PageSpeed Insights کسب کنید. اگر در اجرای هر کدام از این روش‌ها مشکل دارید، می‌توانید از من کمک بگیرید.</p>
        '
    ],
    2 => [
        'title' => 'چرا سرعت سایت در سئو اهمیت دارد؟',
        'date' => '۱۰ دی ۱۴۰۴',
        'category' => 'سئو',
        'category_link' => '#',
        'read_time' => '۷ دقیقه',
        'image' => 'fas fa-newspaper',
        'content' => '
            <p>گوگل رسماً اعلام کرده که سرعت سایت یکی از فاکتورهای رتبه‌بندی است. در این مقاله تأثیر سرعت بر سئو و رتبه گوگل را بررسی می‌کنیم.</p>
            
            <h2>Core Web Vitals چیست؟</h2>
            <p>Core Web Vitals مجموعه‌ای از معیارهای گوگل برای اندازه‌گیری تجربه کاربری است که شامل سه فاکتور اصلی می‌شود:</p>
            <ul>
                <li><strong>LCP (Largest Contentful Paint):</strong> زمان بارگذاری بزرگترین محتوای صفحه</li>
                <li><strong>FID (First Input Delay):</strong> زمان پاسخگویی صفحه به اولین تعامل کاربر</li>
                <li><strong>CLS (Cumulative Layout Shift):</strong> پایداری بصری صفحه</li>
            </ul>
            
            <h2>تأثیر مستقیم سرعت بر رتبه گوگل</h2>
            <p>گوگل از سال ۲۰۱۸ سرعت موبایل را به عنوان یک فاکتور رتبه‌بندی معرفی کرد. از سال ۲۰۲۱ نیز Core Web Vitals به این فاکتورها اضافه شد. سایت‌هایی که سرعت بالاتری دارند، شانس بیشتری برای دیده شدن در نتایج اول گوگل دارند.</p>
            
            <blockquote>
                <p>گوگل می‌گوید: "صفحاتی که تجربه کاربری بهتری ارائه می‌دهند، در نتایج جستجو رتبه بالاتری کسب می‌کنند."</p>
            </blockquote>
        '
    ],
    3 => [
        'title' => 'آموزش بهینه‌سازی تصاویر برای وب',
        'date' => '۵ دی ۱۴۰۴',
        'category' => 'تصاویر',
        'category_link' => '#',
        'read_time' => '۴ دقیقه',
        'image' => 'fas fa-newspaper',
        'content' => '
            <p>تصاویر سنگین یکی از دلایل اصلی کندی سایت هستند. با این تکنیک‌ها تصاویر خود را بهینه کنید و حجم آنها را تا ۸۰٪ کاهش دهید.</p>
            
            <h2>فرمت WebP</h2>
            <p>فرمت WebP توسط گوگل توسعه داده شده و حجم بسیار کمتری نسبت به JPEG و PNG دارد. با استفاده از این فرمت می‌توانید حجم تصاویر را تا ۳۰٪ کاهش دهید.</p>
            
            <h2>ابزارهای فشرده‌سازی</h2>
            <ul>
                <li>TinyPNG: برای فشرده‌سازی PNG و JPEG</li>
                <li>ShortPixel: افزونه وردپرس برای بهینه‌سازی خودکار</li>
                <li>ImageOptim: نرم‌افزار دسکتاپ برای مک</li>
            </ul>
        '
    ]
];

$post = $posts[$post_id] ?? $posts[1];

$pageTitle = $post['title'] . " | وبلاگ بهینه‌سازی سرعت";
$pageDescription = substr(strip_tags($post['content']), 0, 160) . "...";
include 'header.php';
?>

    <!-- هدر صفحه -->
    <section class="page-header">
        <div class="container">
            <h1>وبلاگ</h1>
            <div class="breadcrumb">
                <a href="index.php">خانه</a> / <a href="blog.php">وبلاگ</a> / <span><?php echo $post['title']; ?></span>
            </div>
        </div>
    </section>

    <!-- محتوای مقاله -->
    <section class="single-post">
        <div class="container">
            <div class="blog-layout">
                <main class="blog-main">
                    <article class="blog-post single">
                        <div class="blog-image-large">
                            <i class="<?php echo $post['image']; ?>"></i>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span><i class="far fa-calendar"></i> <?php echo $post['date']; ?></span>
                                <span><i class="far fa-clock"></i> <?php echo $post['read_time']; ?></span>
                                <span><i class="far fa-folder"></i> <a href="<?php echo $post['category_link']; ?>"><?php echo $post['category']; ?></a></span>
                            </div>
                            
                            <h1><?php echo $post['title']; ?></h1>
                            
                            <div class="post-content">
                                <?php echo $post['content']; ?>
                            </div>
                            
                            <!-- اشتراک‌گذاری -->
                            <div class="share-box">
                                <h4>اشتراک‌گذاری:</h4>
                                <div class="share-links">
                                    <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-telegram"></i></a>
                                    <a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                            
                            <!-- مقالات مرتبط -->
                            <div class="related-posts">
                                <h3>مقالات مرتبط</h3>
                                <div class="related-grid">
                                    <div class="related-item">
                                        <h4><a href="single.php?id=2">چرا سرعت سایت در سئو اهمیت دارد؟</a></h4>
                                    </div>
                                    <div class="related-item">
                                        <h4><a href="single.php?id=3">آموزش بهینه‌سازی تصاویر برای وب</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
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
                        </ul>
                    </div>

                    <!-- مقالات پربازدید -->
                    <div class="sidebar-widget popular-widget">
                        <h3>مقالات پربازدید</h3>
                        <ul>
                            <li><a href="single.php?id=1">۱۰ روش تضمینی برای افزایش سرعت وردپرس</a></li>
                            <li><a href="single.php?id=2">چرا سرعت سایت در سئو اهمیت دارد؟</a></li>
                            <li><a href="single.php?id=3">آموزش بهینه‌سازی تصاویر برای وب</a></li>
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
                        </div>
                    </div>
                    
                    <!-- CTA در سایدبار -->
                    <div class="sidebar-widget cta-widget">
                        <h3>نیاز به مشاوره؟</h3>
                        <p>برای آنالیز رایگان سرعت سایتت، همین حالا با من تماس بگیر.</p>
                        <a href="contact.php" class="btn btn-primary btn-block">مشاوره رایگان</a>
                    </div>
                </aside>
            </div>
        </div>
    </section>

<?php include 'footer.php'; ?>