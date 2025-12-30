<?php
include('connection.php');

$merchantID = "00000000-0000-0000-0000-000000000000";
$booking_id = $_GET['id'];
$authority  = $_GET['Authority'];
$status     = $_GET['Status'];

$sql = "SELECT sid FROM bookings WHERE id='$booking_id'";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);

$amount = $row['sid'] * 50000;

if ($status == 'OK') {

    $data = [
        "merchant_id" => $merchantID,
        "amount" => $amount,
        "authority" => $authority
    ];

    $ch = curl_init('https://sandbox.zarinpal.com/pg/v4/payment/verify.json');
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

    $result = curl_exec($ch);
    $result = json_decode($result, true);
    curl_close($ch);

    if ($result['data']['code'] == 100) {
        mysqli_query($conn, "UPDATE bookings SET status='paid' WHERE id='$booking_id'");
        echo "✅ پرداخت با موفقیت انجام شد (Sandbox)";
    } else {
        echo "❌ پرداخت ناموفق";
    }

} else {
    echo "پرداخت لغو شد";
}
