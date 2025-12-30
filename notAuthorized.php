<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دسترسی غیرمجاز</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        body { direction: rtl; text-align: center; margin-top: 100px; }
        .warning-img { max-width: 300px; margin-bottom: 20px; }
    </style>
</head>
<body>
    <?php include('adminNav.php'); ?>

    <div class="container">
        <img class="warning-img" src="img/unauthorized.png" alt="عدم دسترسی">
        <h1 class="text-danger">شما اجازه دسترسی به این صفحه را ندارید!</h1>
        <p>لطفاً به پنل مدیریت یا صفحه اصلی بازگردید.</p>
        <a class="btn btn-primary mt-3" href="admin.php">بازگشت به پنل مدیریت</a>
        <a class="btn btn-secondary mt-3" href="index.php">بازگشت به صفحه اصلی</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
