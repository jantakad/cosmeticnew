<?php
$host = "localhost";
$usr = "root";
$pwd = "";
$db = "cosmeticnew";

// Create connection
$conn = mysqli_connect($host, $usr, $pwd, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<?php
include_once("connectdb.php"); // เชื่อมต่อฐานข้อมูล
session_start();
$kw = $_POST['search'] ?? '';  // รับค่าจากฟอร์มค้นหา
$categoryId = $_POST['category'] ?? '';  // รับค่าจากฟอร์มประเภทสินค้า
?>

<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
   <meta name="generator" content="Hugo 0.84.0">
   <title>Shine Cosmatic</title>

   <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

   <style>
      body {
        background-color: #FDF5E6;
        background-repeat: no-repeat;
      }
      .col-lg-4, .navbar, .bg-dark {
        background-color: #ec407a;
      }
      .navbar-brand, .nav-link, .text-white, .lead, h1, h2 {
        color: #FFFFFF !important;
      }
      .btn-secondary {
        background-color: #ec407a;
        border-color: #ec407a;
      }
      .featurette-divider {
        border-top: 5px solid #FFB6C1;
      }
      .category-button {
        margin: 10px 5px;
      }
      footer {
        background-color: #FDF5E6;
        color: #FFFFFF;
      }
   </style>
</head>

<body>
<header data-bs-theme="dark">
   <div class="collapse text-bg-dark" id="navbarHeader">
      <div class="container">
         <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
               <h4>*Shine Cosmatic*</h4>
               <p class="text-body-secondary">แหล่งรวมเครื่องสำอางสำหรับคนรักความงาม</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
               <h4><?php echo isset($_SESSION['aname']) ? htmlspecialchars($_SESSION['aname']) : 'ผู้ดูแล'; ?></h4>
               <ul class="list-unstyled">
                  <li><a href="logout.php" class="text-white">ออกจากระบบ</a></li>
               </ul>
            </div>
         </div>
      </div>
   </div>

   <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
         <a href="#" class="navbar-brand d-flex align-items-center">
            <strong>Shine Cosmatic</strong>
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader">
            <span class="navbar-toggler-icon"></span>
         </button>
      </div>
   </div>
</header>

<main>
   <section class="py-5 text-center container">
      <h1 class="fw-bg-color:#ec407a;">ShineCosmatics</h1>
      <a href="edit_orders.php" class="btn btn-success">แก้ไขสินค้า</a>
      <a href="admin_dashboard.php" class="btn btn-success">แก้ไขข้อมูลลูกค้า</a>
      <a href="edit_category.php" class="btn btn-success">แก้ไขประเภทสินค้า</a>
      <a href="insert.php" class="btn btn-primary my-2">เพิ่มสินค้า</a>
      <a href="view_order.php" class="btn btn-primary my-2">จัดการออเดอร์</a>
      <center>
         <form method="post" class="mb-3">
            <label for="search">ค้นหา:</label>
            <input type="text" name="search" id="search" value="<?= htmlspecialchars($kw) ?>" autofocus>
            <button type="submit" class="btn btn-danger">OK</button>
            <br><br>
            <strong>เลือกประเภทสินค้า:</strong><br><br>
            <?php
            $sql2 = "SELECT * FROM category";
            $rs2 = mysqli_query($conn, $sql2);
            while ($data2 = mysqli_fetch_array($rs2)) {
                echo "<button type='submit' name='category' value='{$data2['c_id']}' class='btn btn-danger category-button'>{$data2['c_name']}</button>";
            }
            ?>
            <button type='submit' name='category' value='' class='btn btn-danger category-button'>ทั้งหมด</button>
         </form>
      </center>
   </section>

   <div class="album py-5 bg-body-tertiary">
      <div class="container">
         <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <?php
            $sql = "SELECT * FROM product WHERE (p_name LIKE '%$kw%' OR p_detail LIKE '%$kw%')";

            if (!empty($categoryId)) {
                $sql .= " AND c_id = '$categoryId'";
            }

            $rs = mysqli_query($conn, $sql);

            while ($data = mysqli_fetch_array($rs)) {
            ?>
               <div class="col">
                  <div class="card shadow-sm">
                     <img src="images/<?=$data['p_id'];?>.<?=$data['p_picture'];?>" width="100%" height="400">
                     <div class="card-body">
                        <p class="card-text"><?=$data['p_name'];?><br><?=$data['p_price'];?> บาท</p>
                     </div>
                  </div>
               </div>
            <?php } ?>
         </div>
      </div>
   </div>
</main>

<footer>
   <div class="container">
      <p class="text-center">© Shine Cosmetic</p>
   </div>
</footer>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
