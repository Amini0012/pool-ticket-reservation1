<?php
include('connection.php');

$merchantID = "00000000-0000-0000-0000-000000000000"; // مرچنت تستی
$booking_id = $_GET['id'];

$sql = "SELECT sid FROM bookings WHERE id='$booking_id'";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($res);

$amount = $row['sid'] * 50000; // هر بلیط 50 هزار تومان

$callbackURL = "http://localhost/zarinpal_verify.php?id=$booking_id";
$description = "پرداخت رزرو استخر";

$data = [
    "merchant_id" => $merchantID,
    "amount" => $amount,
    "callback_url" => $callbackURL,
    "description" => $description
];

$ch = curl_init('https://sandbox.zarinpal.com/pg/v4/payment/request.json');
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);

$result = curl_exec($ch);
$result = json_decode($result, true);
curl_close($ch);

if ($result['data']['code'] == 100) {
    header('Location: https://sandbox.zarinpal.com/pg/StartPay/'.$result['data']['authority']);
    exit;
} else {
    echo "❌ خطا در اتصال به درگاه زرین‌پال";
}
