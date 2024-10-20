<?php
include_once("connectdb.php"); // เชื่อมต่อฐานข้อมูล
session_start();

// รับค่าค้นหาและประเภทสินค้า
$kw = $_POST['search'] ?? '';
$categoryId = $_POST['category'] ?? '';
?>
<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
   <meta name="generator" content="Hugo 0.84.0">
   <title>Album example · Bootstrap v5.0</title>
   <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

   <style>
      /* สไตล์ที่ปรับแต่ง */
      body { background-color: #FDF5E6; }
      .navbar, .bg-dark { background-color: #ec407a !important; }
      .navbar-brand, .nav-link, .text-white { color: #FFFFFF !important; }
      .btn-secondary, .text-muted, .lead, h1, h2, .featurette-heading { color: #ec407a !important; }
      .featurette-divider { border-top: 5px solid #FFB6C1; }
      footer { background-color: #FDF5E6; }
   </style>
</head>

<body>
<header data-bs-theme="dark">
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <strong>Shine Cosmetic</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>
  <section class="py-5 text-center container">
    <h1>ShineCosmetics</h1>
    <div class="mb-3">
      <form method="post" action="">
        <label for="search">ค้นหา:</label>
        <input type="text" name="search" id="search" value="<?= htmlspecialchars($kw) ?>" autofocus>
        <button type="submit" name="Submit" class="btn btn-danger">OK</button><br><br>

        <strong>เลือกประเภทสินค้า:</strong><br><br>
        <?php
        // แสดงปุ่มประเภทสินค้า
        $sql2 = "SELECT * FROM category";
        $rs2 = mysqli_query($conn, $sql2);
        while ($data2 = mysqli_fetch_array($rs2, MYSQLI_BOTH)) {
            echo "<button type='submit' name='category' value='{$data2['c_id']}' class='btn btn-danger category-button'>{$data2['c_name']}</button>";
        }
        ?>
        <button type="submit" name="category" value="" class="btn btn-danger category-button">ทั้งหมด</button>
      </form>
    </div>
  </section>

  <div class="album py-5 bg-body-tertiary">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php
        // แสดงสินค้าตามคำค้นหาและประเภท
        $sql = "SELECT * FROM product WHERE (p_name LIKE '%$kw%' OR p_detail LIKE '%$kw%')";
        if (!empty($categoryId)) {
            $sql .= " AND c_id = '$categoryId'";
        }

        $rs = mysqli_query($conn, $sql);
        if (!$rs) {
            die("Query failed: " . mysqli_error($conn));
        }

        while ($data = mysqli_fetch_array($rs)) {
        ?>
          <div class="col">
            <div class="card shadow-sm">
              <img src="images/<?= htmlspecialchars($data['p_picture']); ?>" width="100%" height="400">
              <div class="card-body">
                <p class="card-text"><?= htmlspecialchars($data['p_name']); ?><br><?= htmlspecialchars($data['p_price']); ?> บาท</p>
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
