<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Show Data</title>
	<style>
		body{
			background-image: url(coco.jpg);
			background-size: cover;
			background-repeat: no-repeat;
			font-family: sans-serif;
			color: chocolate;

		}
		a:link, a:visited {
		  background-color: beige;
		  color: black;
		  border: 2px solid chocolate;
		  padding: 10px 20px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		}

		a:hover, a:active {
		  background-color: beige;
		  color:chocolate;
		}
			
	</style>
	
</head>
<body>
<?php
$servername = "localhost";
$username  = "root";
$password = "";
$dbname = "desti";
$connect = mysqli_connect("localhost","root","","desti");
$id = $_POST['id_mhs'];
$prodi = $_POST['id_prodi'];
$nama = $_POST['nama_mhs'];
$alamat = $_POST['alamat'];
$sql = "INSERT INTO mahasiswa VALUES ('$id','$prodi','$nama','$alamat')";
$hasil = mysqli_query($connect, $sql);
if ($hasil) {
	echo "eksekusi tambah data mahasiswa berhasil<br>";
	echo "<a href='paw6.php'>show data</a>";
	
}else {
	echo "ekseskusi tambah data gagal";
}
?>
</body>
</html>



