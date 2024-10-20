<?php
    $host = "127.0.0.1";
	$usr = "root";
	$pwd = "ip123456789";
	$db = "cosmeticnew";

	$conn = mysqli_connect($host,$usr,$pwd) or die("เชื่อมต่อฐานข้อมูลไม่ได้");
	mysqli_select_db($conn,$db) or die("เลือกฐานข้อมูลไม่ได้");
	mysqli_query($conn,"SET NAMES utf8");
	?>
	
