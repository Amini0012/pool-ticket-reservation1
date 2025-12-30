<?php
include('connection.php');

$id = $_GET['id'];

// اجرای حذف حساب کاربری
$sql = "DELETE FROM accounts WHERE id=$id";
$res = mysqli_query($conn, $sql);

if($res){
    echo "<script>alert('حساب کاربری با موفقیت حذف شد');</script>";
} else {
    echo "<script>alert('خطا در حذف حساب: " . mysqli_error($conn) . "');</script>";
}

// بازگشت به مدیریت حساب‌ها
header('Location: accountManager.php');
exit();
?>
