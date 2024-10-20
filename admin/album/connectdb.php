<?php
$host = "localhost";
$usr = "root";
$pwd = "ip123456789"; // เปลี่ยนเป็นรหัสผ่านที่ถูกต้อง
$db = "cosmeticnew";

// เชื่อมต่อฐานข้อมูล
$conn = mysqli_connect($host, $usr, $pwd) or die("เชื่อมต่อฐานข้อมูลไม่ได้: " . mysqli_connect_error());
mysqli_select_db($conn, $db) or die("เลือกฐานข้อมูลไม่ได้: " . mysqli_error($conn));
mysqli_query($conn, "SET NAMES utf8");
?>
