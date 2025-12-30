<?php
include('connection.php');

$id = $_GET['id'] ?? null;
if (!$id) die("رزرو نامعتبر است");

$sql = "SELECT sid FROM bookings WHERE id='$id'";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);

$amount = $row['sid'] * 50000; // هر بلیط 50 هزار تومان
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>درگاه پرداخت تستی</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex justify-content-center align-items-center vh-100">

<div class="card shadow p-4 text-center" style="width: 22rem;">
    <h5 class="mb-3">درگاه پرداخت تستی</h5>

    <p>مبلغ قابل پرداخت:</p>
    <h4 class="text-success"><?php echo number_format($amount); ?> تومان</h4>

    <hr>

    <p class="text-muted">شماره کارت تستی</p>
    <p><b>6037-9918-7480-1234</b></p>

    <div class="d-grid gap-2 mt-3">
        <a href="paymentResult.php?id=<?php echo $id; ?>&status=success"
           class="btn btn-success">پرداخت موفق</a>

        <a href="paymentResult.php?id=<?php echo $id; ?>&status=failed"
           class="btn btn-danger">پرداخت ناموفق</a>
    </div>
</div>

</body>
</html>
