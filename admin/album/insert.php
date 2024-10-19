<!doctype html>
<html lang="en">
<head>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Album example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    body {
    background-color: #FDF5E6
	; /* เปลี่ยนสีพื้นหลังของทั้งหน้า */
    background-repeat: no-repeat;
  }
  .col-lg-4 {
    background-color: #ec407a; /* สีชมพู */
  }
		 .navbar, .bg-dark {
        background-color: #ec407a !important; /* สีชมพูสดสำหรับ navbar และพื้นหลัง */
      }
 .navbar-brand, .nav-link, .text-white {
        color: #FFFFFF !important; /* ตัวอักษรใน navbar เป็นสีขาว */
      }
		.btn-secondary {
        background-color: #ec407a; /* ปุ่มเป็นสีชมพูอ่อน */
        border-color: #ec407a;
      }
		.text-muted {
        color: #ec407a !important; /* ข้อความตัวเล็กเป็นสีชมพูสด */
      }
		 .lead {
        color: #ec407a !important; /* ข้อความหลักเป็นสีชมพูสด */
      }
 .featurette-divider {
        border-top: 5px solid #FFB6C1; /* เส้นแบ่งเป็นสีชมพูอ่อน */
      }

      .col-lg-4 {
        background-color: #FDF5E6; /* พื้นหลังคอลัมน์เป็นสีชมพูอ่อน */
      }
		h1, h2 {
        color: #ec407a; /* สีชมพูสดสำหรับ h1 และ h2 */
      }

      .featurette-heading {
        color: #ec407a !important; /* สีชมพูสดเข้มสำหรับข้อความภายใน featurette */
      }
		 .category-button {
        margin: 10px 5px; /* เว้นระยะห่างระหว่างปุ่ม */
    }
		 footer {
        background-color: #FDF5E6;
        color: #FFFFFF;
      }
		.heading{color:#ec407a !important; }
		
</style>

</head>
<body>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Light
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Dark
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div>

   

<body>
	<a href="type.php" class="btn-pink">
    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ec407a" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
        <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1"/>
    </svg>
</a>

<!-- เพิ่มสไตล์ -->
<style>
    .btn-pink {
        background-color: #FDF5E6; /* พื้นหลังสีชมพูอ่อน */
        padding: 10px;
        border-radius: 8px;
        display: inline-block;
    }
    .btn-pink:hover {
        background-color: #ec407a; /* เปลี่ยนพื้นหลังเป็นสีชมพูสดเมื่อ hover */
        color: #fff;
    }
</style>

<!-- เพิ่มสไตล์ -->
<style>
    .btn-pink {
        background-color: #FDF5E6; /* พื้นหลังสีชมพูอ่อน */
        padding: 10px;
        border-radius: 8px;
        display: inline-block;
    }
    .btn-pink:hover {
        background-color: #ec407a; /* เปลี่ยนพื้นหลังเป็นสีชมพูสดเมื่อ hover */
        color: #fff;
    }
</style>

</a>
<div class="container mt-4">
        <h1 class="text-center">Shine Cosmetic</h1>
        <div class="text-center mb-3">
        </div> 

        <form method="post" action="" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="pname" class="form-label">ชื่อสินค้า</label>
                <input type="text" name="pname" class="form-control" id="pname" required autofocus>
            </div>
            <div class="mb-3">
                <label for="pdetail" class="form-label">รายละเอียดสินค้า</label>
                <textarea name="pdetail" class="form-control" id="pdetail" rows="5"></textarea>
            </div>
            <div class="mb-3">
                <label for="pprice" class="form-label">ราคา</label>
                <input type="text" name="pprice" class="form-control" id="pprice" required>
            </div>
            <div class="mb-3">
                <label for="pimg" class="form-label">รูปภาพ</label>
                <input type="file" name="pimg" class="form-control" id="pimg">
            </div>
            <div class="mb-3">
                <label for="pcat" class="form-label">ประเภทสินค้า</label>
                <select name="pcat" class="form-select" id="pcat">
                    <?php	
                    include_once("connectdb.php");
                    $sql2 = "SELECT * FROM `category` ORDER BY c_name ASC";
                    $rs2 = mysqli_query($conn, $sql2);
                    while ($data2 = mysqli_fetch_array($rs2)) {
                    ?>
                        <option value="<?=$data2['c_id'];?>"><?=$data2['c_name'];?></option>
                    <?php } ?>
                </select>
            </div>
            <button type="submit" name="Submit" class="btn btn-success">เพิ่ม</button>
        </form>
        <hr>

        <?php
        if (isset($_POST['Submit'])) {
            //var_dump($_FILES['pimg']['name']); exit;
            $file_name = $_FILES['pimg']['name'];
            $ext = substr($file_name, strpos($file_name, '.') + 1);

            $sql = "INSERT INTO `product` (`p_id`, `p_name`, `p_detail`, `p_price`, `p_picture`, `c_id`) VALUES (NULL, '{$_POST['pname']}', '{$_POST['pdetail']}', '{$_POST['pprice']}', '{$ext}', '{$_POST['pcat']}')";
            mysqli_query($conn, $sql) or die("เพิ่มข้อมูลสินค้าไม่ได้");
            $idauto = mysqli_insert_id($conn);

            copy($_FILES['pimg']['tmp_name'], "images/" . $idauto . "." . $ext);

            echo "<script>";
            echo "alert('เพิ่มข้อมูลสินค้าสำเร็จ');";
            echo "window.location='type.php';";
            echo "</script>";
        }
        ?>

    </div>

    <?php	
    mysqli_close($conn);
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
