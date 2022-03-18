<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<h1>Day la trang chu</h1>

<?php 
$ket_noi=mysqli_connect('localhost','root','','j2school');
$sql="select * from tin_tuc";
mysqli_set_charset($ket_noi,'utf8');
$ket_qua=mysqli_query($ket_noi,$sql);
 ?>
 <a href="form_insert.php">
 	Them bai viet
 </a>
 <table border="1" width="100%">
 	<tr>
 		<th>Ma</th>
 		<th>Tieu De</th>
 		<th>Anh</th>
 	</tr>
 	<<?php foreach ($ket_qua as $tung_bai_tin_tuc){ ?>
 		<tr>
 			<td><?php echo $tung_bai_tin_tuc['ma']; ?></td>
 			<td>
 				<a href="show.php? ma= <?php echo $tung_bai_tin_tuc['ma'] ?>">
 					<?php echo $tung_bai_tin_tuc['tieu_de'] ?>
 				</a>
 			</td>
 			<td>
 				<img src="<?php echo $tung_bai_tin_tuc['anh'] ?>" height=100>
 			</td>
 		</tr>
 	<?php } ?>
 </table>
 <?php mysql_close($ket_noi) ?>
</body>
</html>