<?php
$host = "localhost";
$usr = "root";
$pwd = "ip123456789";
$db = "cosmeticnew";

// เชื่อมต่อกับฐานข้อมูล
$conn = mysqli_connect($host, $usr, $pwd, $db);

// ตรวจสอบการเชื่อมต่อ
if (!$conn) {
    die("เชื่อมต่อฐานข้อมูลไม่ได้: " . mysqli_connect_error());
}

// ตั้งค่ารหัสตัวอักษร
mysqli_set_charset($conn, "utf8");
?>
