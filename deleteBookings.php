<?php
include('connection.php');

$id = $_GET['id'];

// حذف رزرو از دیتابیس
$sql = "DELETE FROM bookings WHERE id=$id";
$res = mysqli_query($conn, $sql);

if($res){
    echo "<script>alert('رزرو با موفقیت حذف شد');</script>";
} else {
    echo "<script>alert('خطا در حذف رزرو: " . mysqli_error($conn) . "');</script>";
}

// بازگشت به صفحه لیست رزروها
header('Location: bookingsList.php');
exit();
?>
