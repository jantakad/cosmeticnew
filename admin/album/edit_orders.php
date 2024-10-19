<!doctype html>
<html lang="en"><head>
    <meta charset="utf-8">
    <title>ตะกร้าสินค้า - Shine Cosmetic</title>

    <!-- ใช้ jQuery และ DataTables สำหรับการจัดการตาราง -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.7/css/dataTables.dataTables.css" />
    <script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script>
    $(document).ready(function () {
        $('#myTable').DataTable();

        // ฟังก์ชันสำหรับกรองข้อมูลตามประเภทที่เลือก
        $('#category').change(function() {
            var categoryId = $(this).val();
            // ทำการกรองตาราง
            $('#myTable tbody tr').each(function() {
                var rowCategoryId = $(this).data('category-id');
                if (categoryId) {
                    $(this).toggle(rowCategoryId == categoryId); // แสดงเฉพาะแถวที่ตรงกับประเภทที่เลือก
                } else {
                    $(this).show(); // แสดงทุกรายการถ้าไม่มีการเลือกประเภท
                }
            });
        });
    });
    </script>

    <style>
        /* ปุ่มแก้ไข */
.btn-warning {
    background-color: #ffa726 !important; /* สีส้มสด */
    border-color: #ff9800; /* สีขอบส้ม */
    color: #fff; /* ตัวอักษรสีขาว */
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* เงา */
}

.btn-warning:hover {
    background-color: #fb8c00 !important; /* สีส้มเข้มขึ้นเมื่อ hover */
    border-color: #f57c00;
    box-shadow: 0px 6px 8px rgba(0, 0, 0, 0.15); /* เพิ่มเงาเมื่อ hover */
}

/* ปุ่มลบ */
.btn-danger {
    background-color: #e53935 !important; /* สีแดงสด */
    border-color: #d32f2f; /* สีขอบแดง */
    color: #fff; /* ตัวอักษรสีขาว */
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* เงา */
}

.btn-danger:hover {
    background-color: #c62828 !important; /* สีแดงเข้มขึ้นเมื่อ hover */
    border-color: #b71c1c;
    box-shadow: 0px 6px 8px rgba(0, 0, 0, 0.15); /* เพิ่มเงาเมื่อ hover */
}

    </style>
</head>

<body>
    <a href="type.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#ec407a" class="bi bi-arrow-left-square-fill" viewBox="0 0 16 16">
            <path d="M16 14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2zm-4.5-6.5H5.707l2.147-2.146a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L5.707 8.5H11.5a.5.5 0 0 0 0-1"/>
        </svg>
    </a>

    <center>
        <img class="mb-1" src="../assets/brand/459176263_518078740831527_7142297360152062850_n.jpg" alt="" width="200" height="200">
    </center>
    <center><h1 class="fw-bg-color:#ec407a" >ShineCosmatics</h1></center>

    <div class="container border">
        <div class="row mb-1 justify-content-between">
            <div class="col-12 d-flex justify-content-end">
                <label for="category" class="me-2">ประเภทสินค้า:</label>
                <select name="category" class="form-select" id="category" style="width: 150px;">
                    <option value=""></option>
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
        </div>

        <table id="myTable" class="table table-striped table-hover" style="width:100%">
            <thead>
                <tr>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                    <th>Picture</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Detail</th>
                    <th>Price</th>
                    <th>Type</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include_once("connectdb.php");
                $sql = "SELECT * FROM product ORDER BY p_id ASC";
                $rs = mysqli_query($conn, $sql);
                while ($data = mysqli_fetch_array($rs)) {
            ?>
                <tr data-category-id="<?=$data['c_id'];?>">
                    <td><a href="update.php?pid=<?=$data['p_id'];?>" class="btn btn-warning btn-sm"><i class="bi bi-pen"></i>แก้ไข</a></td>
                    <td><a href="delete.php?pid=<?=$data['p_id'];?>&ext=<?=$data['p_picture'];?>" onClick="return confirm('ยืนยันการลบ?');" class="btn btn-danger"><i class="bi bi-trash-fill"></i>ลบ</a></td>
                    <td><img src="images/<?=$data['p_id'];?>.<?=$data['p_picture'];?>" height="140"></td>
                    <td><?=$data['p_id'];?></td>
                    <td><?=$data['p_name'];?></td>
                    <td><?=$data['p_detail'];?></td>
                    <td><?=$data['p_price'];?></td>
                    <td><?=$data['c_id'];?></td>
                </tr>
            <?php
                }
                mysqli_close($conn);
            ?>
            </tbody>
        </table>
    </div>
    <br><br>
</body>
</html>
