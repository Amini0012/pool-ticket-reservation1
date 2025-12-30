<?php
session_start();

// پاک کردن همه متغیرهای سشن
session_unset();

// پایان دادن به سشن
session_destroy();

// هدایت به صفحه ورود
header("Location: login.php");
exit();
?>
