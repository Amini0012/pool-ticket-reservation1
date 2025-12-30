<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>درباره ما</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body { direction: rtl; text-align: right; }
        h1, h5, h6 { margin-bottom: 15px; }
        .details { display: flex; flex-wrap: wrap; gap: 20px; align-items: center; }
        .details div, .details img { flex: 1; }
    </style>
</head>

<body>
<?php include('Nav.php');?>

<section id="about" class="container mt-5 pt-5">
    <div>
        <h1>درباره ما</h1>
        <hr>
        <div class="details">
            <div>
                <h5>تکنیک‌های حرفه‌ای</h5>
                <p>
                    برای بهبود عملکرد و حفظ سلامتی، ضروری است که ورزش را به‌صورت صحیح انجام دهید.
                    برای این منظور، ما متدولوژی موثری برای تمامی سنین ارائه می‌دهیم که به شما کمک می‌کند بهتر شنا کنید.
                </p>
            </div>
            <img src="" alt="تصویر مرتبط" class="img-fluid">
        </div>
    </div>

    <div class="mt-5 mb-4">
        <h1>گالری تصاویر</h1>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="..." class="card-img-top" alt="تصویر 1">
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="..." class="card-img-top" alt="تصویر 2">
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="..." class="card-img-top" alt="تصویر 3">
                </div>
            </div>    
        </div>
    </div>

    <div>
        <h1>سانس‌های موجود</h1>

        <div class="mb-3">
            <h6>سانس صبح</h6>
            <div class="slot">
                <img src="" alt="سانس صبح">
                <p>6 صبح، 7 صبح، 9 صبح، 10 صبح، 11 صبح</p>
            </div>
        </div>
        <div class="mb-3">
            <h6>سانس بعدازظهر</h6>
            <div class="slot">
                <img src="" alt="سانس بعدازظهر">
                <p>1 بعدازظهر، 2 بعدازظهر، 3 بعدازظهر، 4 بعدازظهر، 5 بعدازظهر</p>
            </div>
        </div>
        <div class="mb-3">
            <h6>سانس عصر</h6>
            <div class="slot">
                <img src="img/1.jpg" alt="سانس عصر">
                <p>6 عصر، 7 عصر، 8 عصر</p>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>

</body>
</html>
