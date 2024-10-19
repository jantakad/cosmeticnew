<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>ประวัติการสั่งซื้อ</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4; /* พื้นหลังของหน้าเว็บ */
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 80%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #FFC0CB; /* สีพื้นหลังของตารางสีชมพู */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #FF69B4; /* สีชมพูเข้มสำหรับหัวตาราง */
            color: white;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
        a {
            text-decoration: none;
            color: #007BFF;
        }
        a:hover {
            color: #0056b3;
        }
        .btn {
            padding: 8px 16px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>
    <h1>ประวัติการสั่งซื้อ</h1>
    <table border="1" cellspacing="1" cellpadding="1">
        <tr>
            <th width="153">&nbsp;</th>
            <th width="153">เลขที่ใบสั่งซื้อ</th>
            <th width="193">วันที่</th>
            <th width="150">ราคารวม</th>
         
        </tr>

        <?php
            include("connectdb.php");
            $sql = "select * from `orders` order by oid desc";
            $rs = mysqli_query($conn, $sql);
            while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
        ?>
        
        <tr>
			
            <td><a href="index_check.php" class="btn btn-success w-100 py-2">รายละเอียด</a></td>
            <td><?= $data['oid']; ?></td>
            <td><?= $data['odate']; ?></td>
            <td><?= number_format($data['ototal'], 0); ?></td>
         
        </tr>

        <?php } ?>

    </table>
</body>
</html>
