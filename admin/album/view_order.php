<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>รายการใบสั่งซื้อ</title>
    <!-- เรียกใช้ Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- สไตล์เพิ่มเติม -->
    <style>
        body {
            background-color: #FADADD; /* สีชมพูนม */
        }
        h1 {
            color: #ec407a; /* สีชมพูเข้ม */
        }
        table {
            background-color: white; /* พื้นหลังตารางสีขาว */
        }
    </style>
</head>

<body>
<div class="container my-5">
    <h1 class="text-center mb-4">รายการใบสั่งซื้อ</h1>
   <a href="type.php" class="btn btn-primary" width="200px">กลับไปเลือกสินค้า</a><br><br>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ดูรายละเอียด</th>
                <th>เลขที่ใบสั่งซื้อ</th>
                <th>วันที่</th>
                <th>ราคารวม</th>
                
            </tr>
        </thead>
        <tbody>
        <?php
            include("../album/connectdb.php");
            $sql = "SELECT * FROM orders ORDER BY oid DESC";
            $rs = mysqli_query($conn, $sql);
            while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
        ?>
       
            <tr>
                <td><a href="view_order_detail.php?a=<?=$data['oid'];?>" class="btn btn-primary btn-sm">ดูรายละเอียด</a></td>
                <td><?=$data['oid'];?></td>
                <td><?=$data['odate'];?></td>
                <td><?=number_format($data['ototal'], 0);?>บาท</td>
                
           
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<!-- เรียกใช้ Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
