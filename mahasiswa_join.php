<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistem Informasi</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type='javascript' src="assets/js/bootstrap.min.js"></script>

    <style > 
      td{
        padding: 8px;
      } 
      th{
        padding: 8px;
        text-align: center;
      }
    </style>
</head>

<body style="background-color : #fafafa;"> <br><br>
    <header class="main-header">
        <center>
            <h1 class="blog-title">Sistem Informasi Kerja Praktek Teknik Industri</h1>
        </center>
        <center>
            <h4 class="blog-title">Universitas Diponegoro</h4>
        </center>
    </header><br><br>
    <!-- Membuat navbar di sebelah kirihalaman -->
    <div class="col-md-2" align="left">
        <ul class="nav" id="main-menu">
            <br>
            <li>
                <a href="mahasiswa.php"><i class="fa fa-user fa-2x"></i>Mahasiswa</a>
            </li>
            <li>
                <a href="mahasiswa_dosen.php"><i class="fa fa-user fa-2x"></i>Dosen</a>
            </li>
             <li>
                <a class="active-menu" a href="mahasiswa_join.php"><i class="fa fa-user fa-2x"></i>Daftar Mahasiswa KP</a>
            </li>
            <li>
                <a href="logout.php"><i class="fa fa-sign-out fa-2x"></i>Log Out</a>
            </li>
        </ul>
    </div>
    <div class="container col-md-10">
        <div class="row">
            <div class="col-md-10">
                <table class="tabletable-striped table-bordered">
   <thead>

<!-- Judul kolom -->
<tr>
   <th>NIM</th>
   <th>Nama Mahasiswa</th>
   <th>Kode Dosen Pembimbing</th>
   <th>Tema KP</th>
   <th>IPK</th>
   <th>Jumlah SKS</th>
   <th>Tempat KP</th>
  </tr>
 </thead>
 <?php
include "koneksi.php";
$query = "
select mahasiswa.nama AS name, mahasiswa.nim, mahasiswa.dosbing, mahasiswa.temakp, mahasiswa.ipk, mahasiswa.jumlahsks, mahasiswa.tempatkp
from mahasiswa join dosen ON mahasiswa.id_dosen = dosen.id_dosen
";
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
while ($row = mysqli_fetch_array($result)) {
?>
 <tr>
  <td><?php echo $row['nim']; ?></td>
  <td><?php echo $row['name']; ?></td>
  <td><?php echo $row['dosbing']; ?></td>
  <td><?php echo $row['temakp']; ?></td>
  <td><?php echo $row['ipk']; ?></td>
  <td><?php echo $row['jumlahsks']; ?></td>
  <td><?php echo $row['tempatkp']; ?></td>
 </tr>
<?php
}
?>

</tbody>
    </table>
   </div>
  </div>
 </div>
</body>

</html>