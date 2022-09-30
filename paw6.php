<?php
$koneksi = mysqli_connect("localhost", "root","","desti");
$sql = "SELECT id_mhs,nama_mhs,nama_prodi,alamat FROM mahasiswa m, prodi p where m.id_prodi = p.id_prodi";
$hasil = mysqli_query($koneksi,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Data Mahasiswa</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    a:link {
        text-decoration: none;
    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>DATA MAHASISWA TEKNIK </h2>
  <p>Data ini dari Mysql</p>
  <button type="button" class="btn btn-info"><a href="form.php">Tambah</a></button>         
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id Mahasiswa</th>
        <th>Nama Mahasiswa</th>
        <th>Prodi Mahasiswa</th>
        <th>Alamat</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
          while ($baris=mysqli_fetch_assoc($hasil)) {
          
      ?>
      <tr>
        <td><?php echo $baris['id_mhs'];?></td>
        <td><?php echo $baris['nama_mhs'];?></td>
        <td><?php echo $baris['nama_prodi'];?></td>
        <td><?php echo $baris['alamat'];?></td>
        <td>
        <button type="button" class="btn btn-info">Edit</button>
        <button type="button" class="btn btn-danger">Delete</button>
      </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
