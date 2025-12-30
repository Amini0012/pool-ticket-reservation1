<?php
include ('connection.php');
session_start();

if(isset($_POST['submit'])){
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $pass = $_POST['pass']; 
    $cpass = $_POST['cpass'];
    $type = $_POST['type'];

    if($pass === $cpass){
        $pass_en = md5($pass);
        $sql="INSERT INTO accounts (`name`, `email`, `pass`, `type`) VALUES ('$name', '$email', '$pass_en', '$type')";
        if (mysqli_query($conn, $sql)) {
            echo "<script>alert('حساب کاربری با موفقیت ایجاد شد')</script>" ;
        }
        else {
            echo "<script>alert('خطا: '.$sql.'<br>' . mysqli_error($conn))</script>" ;
        }
    }
    else{
        echo "<script>alert('رمز عبور با تکرار آن مطابقت ندارد')</script>" ;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ایجاد حساب کاربری</title>

    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- استایل راست‌چین اختیاری -->
    <style>
        body { direction: rtl; text-align: right; }
        label { right: 10px; left: auto; }
    </style>
</head>

<body>

<?php include('adminNav.php');?>

<section class="form">
    <div class="contents">
        <div class="content">

            <h2>ایجاد حساب کاربری مدیریت</h2>

            <form action="registration.php" method="POST" class="d-flex flex-column justify-content-center">

                <div class="form-group">
                    <input id="name" name="name" type="text" required>
                    <label for="name">نام کاربری</label>
                </div>

                <div class="form-group">
                    <input id="email" name="email" type="email" required>
                    <label for="email">ایمیل</label>
                </div>

                <div class="form-group">
                    <input id="pass" name="pass" type="password" required>
                    <label for="pass">رمز عبور</label>
                </div>

                <div class="form-group">
                    <input id="cpass" name="cpass" type="password" required>
                    <label for="cpass">تکرار رمز عبور</label>
                </div>

                <div class="m-2">
                    <h6 class="text-white">نوع حساب کاربری</h6>
                    <select class="form-select" name="type" id="type" style="margin-bottom:20px;">
                        <option value="">انتخاب نوع حساب</option>
                        <option value="Booking Manager">مدیر رزرو</option>
                        <option value="Manager">مدیر</option>
                        <option value="Query Manager">مدیر پاسخگویی</option>
                    </select>
                </div>

                <input class="btn btn-outline-primary" name="submit" type="submit" value="ثبت حساب" style="width: 50%; margin:auto;">

            </form>
        </div>

        <div class="content-text">
            <h2 class="h-100 p-3 d-flex align-items-center">
                سامانه رزرو نوبت استخر
            </h2>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</section>

</body>
</html>
