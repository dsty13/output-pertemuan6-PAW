<?php 
$servername = "localhost";
$username  = "root";
$password = "";
$dbname = "desti";

$connect = mysqli_connect("localhost","root","","desti");

if ($connect){
	echo "berhasil melakukan koneksi";
}
else
{
	echo "gagal melakukan koneksi";
}

?>