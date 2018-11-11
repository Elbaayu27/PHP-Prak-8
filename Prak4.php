<!DOCTYPE html>
<html>
<head>
	<title>Penyisipan Variable PHP Pada HTML</title>
</head>
<body>
	Silahkan sebutkan warna kesukaan anda..? <br>
<?php
Berikut adalah inisialisasi beberapa variable
$warna1 = "Merah";
$warna2 = "Hijau";
$warna3 = "Kuning";
 ?>
 <b>Di bawah ini adalah warna kesukaanku: 
 	<br>
 <?php
 echo "$warna1, $warna2, $warna3</b>";
 ?> 
</body>
</html>