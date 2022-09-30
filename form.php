<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Mahasiswa</title>
	<style>
		body{
			background-image: url(coco.jpg);
			background-size: cover;
			background-repeat: no-repeat;
			font-family: sans-serif;

		}
		.box{
			width: 280px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%,-50%);
			color:bisque;

		}
		.box h1{
			font-size: 40px;
			border-bottom: 6px solid beige;
			margin-bottom: 50px;
			padding: 13px 0;
		}
		.teks{
			width: 100%;
			overflow: hidden;
			font-size: 20px;
			padding: 8px 0;
			margin: 8px 0;
			border-bottom: 2px solid chocolate;		
		}
		.teks input{
			border: none;
			outline: none;
			background: none;
			color: beige;
			font-size: 18px;
			width: 80%;
			float: left;
			margin: 0 10px;
		}
		.btn{
			width: 100%;
			background:beige;
			border: 2px solid beige;
			color:chocolate;
			padding: 5px;
			font-size: 18px;
			cursor: pointer;
		}

	</style>
</head>
<body>
	<form action="action.php" method="POST">
			<div class="box">
				<h1>Your Data</h1>
				<div class="teks"><input type="text" name="id_mhs" placeholder="id Mahasiswa"></div>
				<div class="teks"><input type="text" name="id_prodi" placeholder="id Program Studi"></div>
				<div class="teks"><input type="text" name="nama_mhs" placeholder="Nama Mahasiswa"></div>
				<div class="teks"><input type="text" name="alamat" placeholder="Alamat"></div>
				<input type="submit" value="insert" class="btn">
			
	</form>
	
</body>
</html>