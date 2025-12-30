<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container d-flex justify-content-between">
        <!-- لوگو سمت چپ -->
        <a class="navbar-brand ms-auto" href="index.php">سیستم <span class="text-info">رزرو</span> استخر</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="تغییر منو">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- منو سمت راست -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0 text-end">
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

<style>
     /* متن منو سمت راست و بدون RTL */
    .navbar-nav { direction: rtl; }
    .nav-link { text-align: right; }
    
    /* لوگو سمت چپ */
    .navbar-brand { margin-right: 0 !important; margin-left: auto !important; }

   
</style>
