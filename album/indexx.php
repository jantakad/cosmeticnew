<?php
session_start();
include_once("connectdb.php"); // เชื่อมต่อฐานข้อมูล
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
		 footer {
        background-color: #FDF5E6;
        color: #FFFFFF;
      }
		.heading{color:#ec407a !important; }
		
</style>

    
  </head>
  <body >
    
<header data-bs-theme="dark">
  <div class="collapse text-bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4>Shine Cosmatic</h4>
          <p class="text-body-secondary">สัมผัสประสบการณ์การช็อปปิ้งที่สนุกสนานและคุ้มค่า มาร่วมสร้างความงามไปด้วยกันที่ร้านเรา!
</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
           <h4><?php echo isset($_SESSION['username']) ? htmlspecialchars($_SESSION['username']) : 'ผู้ใช้งาน'; ?></h4>
           <ul class="list-unstyled">
			
			   <li><a href="logout.php">ออกจากระบบ</a></li>

           </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Shine Cosmatics</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
   <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" >
    <div class="carousel-indicators" >
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
  <div class="carousel-inner">
      <div class="carousel-item active">
       <img src="5.jpg" width="100%" height="100%</td>

        <div class="container">
          <div class="container">
          <div class="carousel-caption text-start">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="6.jpg" width="100%" height="100%</td>

        <div class="container">
          <div class="container">
          <div class="carousel-caption text-start">
           
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="7.jpg" width="100%" height="100%</td>

        <div class="container">
          
        <div class="container">
          <div class="carousel-caption text-end">
           
          </div>
        </div>
      </div>
    </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


</header>

<main>

  <section class="py-2 text-center container">
  
    <div class="row py-lg-0">
      <div class="col-lg-6 col-md-8 mx-auto"><br>
        <blockquote>
          <h1 class="fw-bg-color:#ec407a;" >Shine Cosmatics</h1>
        </blockquote>
        <p class="lead text-muted" style="color:#ec407a;">สัมผัสประสบการณ์การช็อปปิ้งที่สนุกสนานและคุ้มค่า มาร่วมสร้างความงามไปด้วยกันที่ร้านเรา      </p>
      </div>
    </div>
  </section>
  <div class="album py-5 bg-color:#FFB6C1;">
    <div class="container" align="center">
<?php
	
		include_once("connectdb.php"); 		

?>
						  
       <div class="row">
      <div class="col-lg-4">
     <img src = "8.jpg"width="150" height="150">


       
        <p><a class="btn btn-secondary" href="type.php?pid">   สินค้าทั้งหมด &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <img src = "10.jpg"width="150" height="150">
        <p><a class="btn btn-secondary" href="cosview_order.php">ดูประวัติการสั่งซื้อ &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
       <img src = "9.jpg"width="150" height="150">

        
        <p><a class="btn btn-secondary" href="edit.php">ตั้งค่า &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
        </div>
        <hr class="featurette-divider.col-lg-4 {
    background-color: #FFC0CB; /* สีชมพู */
  } ">
        <img src="4.JPG" width="1500"</td>
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading" >4U2   <span class="text-muted">รุ่น HEART DANCE COTTON LIP</span></h2>
        <p class="lead">ลิปจิ้มจุ่มเนื้อคอตตอนแมท เนียนนุ่มเหมือนปุยฝ้าย ทาแล้วกลบร่องปากดูเนียนสวย ดูชุ่มชื้นทั้งวัน ไม่ตกร่อง สีชัดดด พิกเมท์แน่น</p>
        
      </div>
      <div class="col-md-5">
       <img src="1.jpg" width="500" height="500"</td>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading"><span class="text-muted">พาเลทท์ 4U2For You Too Eyeshadow</span></h2>
        <center><p class="lead">อายแชโดว์ ต้อนรับความน่ารักกับ #ดูโอ้อายแชโดว์ ตลับ Minimal น่ารักปุ๊กปิ๊ก พกพาง่าย. 4U2 EYESHADOW "DUO PALETTE" อายแชโดว์ 2 เฉดสีในตลับเดียว.</p></center>
      </div>
      <div class="col-md-5 order-md-1">
         <img src="2.jpg" width="500" height="500"</td>

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">4U2 <span class="text-muted">DEAR ME LIQUID BLUSH</span></h2>
        <p class="lead">บลัชออนเนื้อน้ำ หูกระต่ายสุดคิวท์ เนื้อลิควิด บางเบาสบายผิว แตะนิดเดียวก็ให้สีสวยชัด</p>
      </div>
      <div class="col-md-5">
         <img src="3.jpg" width="500" height="500"</td>

      </div>
    </div>

    <hr class="featurette-divider">

  </div>
    </div>
  </div>

</main>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
    <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>