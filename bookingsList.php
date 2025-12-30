<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("Location: login.php");
} else {
   $type= $_SESSION['type'];
   if($type==='Manager'){
       // do nothing
   } else if ($type!== 'Booking Manager'){
       header('location:notauthorized.php');
   }
}

include ('connection.php');
$sql = 'SELECT * FROM bookings';
$res = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لیست رزروها</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        body { direction: rtl; text-align: right; }
        table th, table td { text-align: center; }
    </style>
</head>

<body>
<?php include('adminNav.php');?>

<section class="list container mt-5">
    <h1 class="mb-4 text-center">لیست رزروها</h1>

    <div class="table-responsive">
        <table id="example" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>نام</th>
                    <th>تعداد بلیط</th>
                    <th>زمان</th>
                    <th>تاریخ</th>
                    <th>عملیات</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if (mysqli_num_rows($res) > 0) {
                while ($rows = mysqli_fetch_assoc($res)) {
                    $id = $rows["id"];
                    echo '<tr>
                        <td>'.$rows["name"].'</td>
                        <td>'.$rows["sid"].'</td>
                        <td>'.$rows["time"].'</td>
                        <td>'.$rows["date"].'</td>
                        <td><a class="btn btn-danger" href="deleteBookings.php?id='.$id.'">حذف</a></td>
                    </tr>';
                }
            }
            ?>
            </tbody>
        </table>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function () {
        $('#example').DataTable({
            "language": {
                "search": "جستجو:",
                "lengthMenu": "نمایش _MENU_ رکورد",
                "info": "نمایش _START_ تا _END_ از _TOTAL_ رکورد",
                "paginate": {
                    "first": "اول",
                    "last": "آخر",
                    "next": "بعدی",
                    "previous": "قبلی"
                },
                "zeroRecords": "هیچ رکوردی یافت نشد"
            }
        });
    });
</script>

</body>
<style>
    /* راست‌چین کردن navbar برای فارسی */
    .navbar-nav { direction: rtl; }
    .nav-link { text-align: right; }
</style>

</html>

