<?php
include ('connection.php');
session_start();

if(isset($_POST['submit'])){

    $name = $_POST['name']; 
    $sid  = $_POST['sid']; 
    $date = $_POST['date']; 
    $time = $_POST['time']; 

    $sql = "INSERT INTO bookings (`name`, `sid`, `time`, `date`)
            VALUES ('$name', '$sid', '$time', '$date')";

    if (mysqli_query($conn, $sql)) {

        // گرفتن ID رزرو
        $booking_id = mysqli_insert_id($conn);

        // ارسال به درگاه زرین‌پال تستی
        header("Location: zarinpal_pay.php?id=$booking_id");
        exit;

    } else {
        echo "<script>alert('خطا در ثبت رزرو')</script>";
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
    <title>رزرو سانس</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        body { direction: rtl; text-align: right; }
        label { right: 10px; left: auto; }
    </style>
</head>

<body>

<!-- Background image -->
<img src="img/bgimg.jpg" alt="." class="bg-image opacity-75" style="
     min-height: 100vh;
     min-width: 100%;
     position: fixed;
     z-index:-1;">

<!-- Nav Bar -->
<?php
if (isset($_SESSION['name'])) {
    include('adminNav.php');
} else {
    include('Nav.php');
}
?>

<div class="m-5 pb-5"></div>

<div class='container-lg p-3 mb-2 bg-light text-dark rounded-2'>
    <br>
    <h1 class="m-5 text-center">رزرو سانس استخر</h1>

    <form class="container d-flex flex-column" action="booking.php" method="post">
        <div class="d-flex flex-column align-items-center">
            <div class="mb-3">
                <label for="name" class="form-label">نام و نام خانوادگی</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
                <label for="id" class="form-label">تعداد بلیط</label>
                <input type="number" name="sid" class="form-control" id="id" required>
            </div>
            <div class="mb-3">
                <label for="date" class="form-label">تاریخ رزرو</label>
                <input class="btn btn-outline-primary" type="date" name="date" id="date" required>
            </div>
        </div>

        <div class="book-slot text-center">

            <div class="form-check row row-cols-1 row-cols-md-4 g5 gx-5 gy-2" id="slot-list">
                <input class="slot btn-check" type="radio"  name="Slot" id="Morning" >
                <label class="btn btn-outline-primary" value="Morning" name="slots" for="Morning">
                    سانس صبح
                </label>

                <input class="btn-check slot" type="radio" value="Afternoon" name="Slot" id="Afternoon">
                <label class="btn btn-outline-primary" value="Afternoon" name="slots" for="Afternoon">
                    سانس بعدازظهر
                </label>

                <input class="btn-check slot" type="radio" value="Evening" name="Slot" id="Evening">
                <label class="btn btn-outline-primary" value="Evening" name="slots" for="Evening">
                    سانس عصر
                </label>
            </div>

            <!-- Morning Slot -->
            <div class="slot-group d-none" id="Morning-slot">
                <h3 class="m-3">سانس صبح</h3>
                <div class="form-check row row-cols-1 row-cols-md-4 g-4">
                    <input class="btn-check" type="radio" value="06:00 am" name="time" id="morning6">
                    <label class="btn btn-outline-primary" for="morning6">6:00 صبح</label>
                    <input class="btn-check" type="radio" value="07:00 am" name="time" id="morning7">
                    <label class="btn btn-outline-primary" for="morning7">7:00 صبح</label>
                    <input class="btn-check" type="radio" value="08:00 am" name="time" id="morning8">
                    <label class="btn btn-outline-primary" for="morning8">8:00 صبح</label>
                    <input class="btn-check" type="radio" value="09:00 am" name="time" id="morning9">
                    <label class="btn btn-outline-primary" for="morning9">9:00 صبح</label>
                    <input class="btn-check" type="radio" value="10:00 am" name="time" id="morning10">
                    <label class="btn btn-outline-primary" for="morning10">10:00 صبح</label>
                    <input class="btn-check" type="radio" value="11:00 am" name="time" id="morning11">
                    <label class="btn btn-outline-primary" for="morning11">11:00 صبح</label>
                </div>
            </div>

            <!-- Afternoon Slot -->
            <div class="slot-group d-none" id="Afternoon-slot">
                <h3 class="m-3">سانس بعدازظهر</h3>
                <div class="form-check row row-cols-1 row-cols-md-4 g-4">
                    <input class="btn-check" type="radio" name="time" value="01:00 pm" id="afternoon1">
                    <label class="btn btn-outline-primary" for="afternoon1">1:00 بعدازظهر</label>
                    <input class="btn-check" type="radio" name="time" value="02:00 pm" id="afternoon2">
                    <label class="btn btn-outline-primary" for="afternoon2">2:00 بعدازظهر</label>
                    <input class="btn-check" type="radio" name="time" value="03:00 pm" id="afternoon3">
                    <label class="btn btn-outline-primary" for="afternoon3">3:00 بعدازظهر</label>
                    <input class="btn-check" type="radio" name="time" value="04:00 pm" id="afternoon4">
                    <label class="btn btn-outline-primary" for="afternoon4">4:00 بعدازظهر</label>
                    <input class="btn-check" type="radio" name="time" value="05:00 pm" id="afternoon5">
                    <label class="btn btn-outline-primary" for="afternoon5">5:00 بعدازظهر</label>
                </div>
            </div>

            <!-- Evening Slot -->
            <div class="slot-group d-none" id="Evening-slot">
                <h3 class="m-3">سانس عصر</h3>
                <div class="form-check row row-cols-1 row-cols-md-4 g-4">
                    <input class="btn-check" type="radio" name="time" value="06:00 pm" id="evening6">
                    <label class="btn btn-outline-primary" for="evening6">6:00 عصر</label>
                    <input class="btn-check" type="radio" name="time" value="07:00 pm" id="evening7">
                    <label class="btn btn-outline-primary" for="evening7">7:00 عصر</label>
                    <input class="btn-check" type="radio" name="time" value="08:00 pm" id="evening8">
                    <label class="btn btn-outline-primary" for="evening8">8:00 عصر</label>
                </div>
            </div>

        </div>

        <div class='md-4'>
            <div class="d-grid gap-2 col-4 mx-auto">
                <marquee>🏊</marquee>
                <input class="btn btn-primary" name="submit" type="submit" id="book" value="رزرو">
            </div>
        </div>

    </form>
</div>
<script src="js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>

</body>
</html>
