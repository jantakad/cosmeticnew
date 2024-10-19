<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>รายละเอียดใบสั่งซื้อ</title>
	

<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );
</script>
</head>

<body>
<h1>รายละเอียดใบสั่งซื้อ </h1>
<table width="863" border="1" cellspacing="1" cellpadding="1">
  <tr>
    <td width="54">ลูกค้า</td>
    <td width="54">ชื่อลูกค้า</td>
	  <td width="318"></td>
    <td width="318">เลขที่ใบสั่งซื้อ</td>
    <td width="141">จำนวน</td>
    <td width="149">ราคา/ชิ้น</td>
    <td width="173">รวม (บาท)</td>
  </tr>
  
  <?php
	session_start();
	include_once("connectdb.php");
	$sql = "SELECT product.*, orders.*, customer.*
FROM product
LEFT JOIN orders_detail ON product.p_id = orders_detail.pid
LEFT JOIN orders ON orders_detail.oid = orders.oid
LEFT JOIN customer ON orders.customer_id = customer.cu_id
WHERE orders_detail.oid ";
	$rs = mysqli_query($conn, $sql) ;
	$i = 0;
	while ($data = mysqli_fetch_array($rs)) {
		$i++;
		$sum = $data['p_price'] * $data['item'] ;
		@$total += $sum;
?>
  <tr>
   <td><?=$data['cu_id'];?></td>
	<td><?=$data['cu_username'];?></td>
	   <td><img src="<?=$data['avatar'];?>" width="60"</td>
   <td><?=$data['oid'];?></td>
 
    <td><?=$data['item'];?></td>
    <td><?=number_format($data['p_price'],0);?></td>
    <td><?=number_format($sum,0);?></td>
  </tr>
 <?php } ?>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>รวมทั้งสิ้น</td>
    <td><?=number_format($total,0);?></td>
  </tr>
</table>
</body>
</html>