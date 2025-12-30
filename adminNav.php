<!--nav bar starts-->
<link href="./css/navbar.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <!-- لوگوی سامانه در سمت چپ -->
        <a class="navbar-brand ms-auto" href="index.php">سیستم <span class="text-info">رزرو</span> استخر</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="تغییر منو">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="direction: rtl;">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">خانه</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#about">درباره ما</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php#contact">تماس با ما</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="booking.php">رزرو سانس</a>
                </li>
                <?php
                    if (isset($_SESSION['name'])) {
                        echo '<li class="nav-item">
                        <a class="nav-link" href="admin.php">پنل مدیریت</a>
                        </li>';
                        echo '<li class="nav-item">
                        <a class="nav-link btn btn-secondary" href="logout.php">خروج</a>
                        </li>';
                    }
                ?>
            </ul>
        </div>
    </div>
</nav>
<!--nav bar ends-->

<style>
    /* راست‌چین کردن متن منوها */
    .navbar-nav { direction: rtl; }
    .nav-link { text-align: right; }

    /* لوگو سمت چپ */
    .navbar-brand { margin-right: 0 !important; margin-left: auto !important; }
</style>
