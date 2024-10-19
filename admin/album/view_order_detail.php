<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>รายละเอียดใบสั่งซื้อ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8d9e6; /* สีชมพูพลาสเทล */
        }
        .container {
            margin-top: 20px;
        }
        h1 {
            color: #d63384; /* สีชมพูเข้ม */
            margin-bottom: 20px;
        }
        .table {
            border: 2px solid black; /* กรอบสีดำ */
        }
        .table th, .table td {
            border: 1px solid black; /* กรอบสีดำสำหรับเซลล์ */
        }
        .thead-light {
            background-color: #f1b2c8; /* สีหัวตาราง */
        }
        .table img {
            width: 80px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>รายละเอียดใบสั่งซื้อ เลขที่ <?= htmlspecialchars($_GET['a']); ?></h1>
		<a href="view_order.php" class="btn btn-primary" width="200px">กลับไปหน้ารายการสั่งซื้อ</a><br><br>
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>ที่</th>
                    <th>สินค้า</th>
                    <th>จำนวน</th>
                    <th>ราคา/ชิ้น</th>
                    <th>รวม (บาท)</th>
                </tr>
            </thead>
            <tbody>
                <?php
				include("../album/connectdb.php");
                if (isset($_GET['a'])) {
                    $order_id = htmlspecialchars($_GET['a']);
                } else {
                    echo "<p>ไม่พบหมายเลขใบสั่งซื้อ</p>";
                    exit(); // หยุดการทำงานถ้าไม่พบหมายเลข
                }
                include("../album/connectdb.php");
                $sql = "SELECT * FROM orders_detail
                INNER JOIN product ON orders_detail.pid = product.p_id
                WHERE orders_detail.oid = '" . mysqli_real_escape_string($conn, $_GET['a']) . "'";
                $rs = mysqli_query($conn, $sql);
                $i = 0;
                $total = 0; // Initialize total
                while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
                    $i++;
                    $sum = $data['p_price'] * $data['item'];
                    $total += $sum; // Add to total
                ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>

    รหัสสินค้า: <?= htmlspecialchars($data['p_id']); ?> <br>
    ชื่อสินค้า: <?= htmlspecialchars($data['p_name']); ?>
</td>

                    <td><?= htmlspecialchars($data['item']); ?></td>
                    <td><?= number_format($data['p_price'], 0); ?></td>
                    <td><?= number_format($sum, 0); ?></td>
                </tr>
                <?php } ?>
                <tr>
                    <td colspan="3"></td>
                    <td>รวมทั้งสิ้น</td>
                    <td><?= number_format($total, 0); ?></td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
