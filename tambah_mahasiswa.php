<!DOCTYPE html>
<html lang="en">
<head>
<title>Sistem Informasi</title>
<meta charset="utf-8">
<meta	http-equiv="X-UA-Compatible"content="IE=edge">
<meta	name="viewport" content="width=device-width, initial-scale=1">
<meta	http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link   rel="stylesheet" href="css/style.css" media="screen" type="text/css" /> <link   href="assets/css/font-awesome.css"rel="stylesheet" />
<link href="assets/css/custom.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/css/bootstrap.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type='javascript' src="assets/js/bootstrap.min.js"></script>
</head>
<body style="background-color : #fafafa;">
<br><br>
<header class="main-header">
<center><h1	class="blog-title">Sistem Informasi Kerja Praktek Teknik Industri</h1></center>
<center><h4	class="blog-title">Universitas Diponegoro</h4></center>
</header><br><br>
<div class="col-md-2" align="left">
<ul	class="nav"	id="main-menu">
<br>
<li>
<a	class="active-menu"	href="mahasiswa.php"><i	class="fa	fa-user	fa-2x"></i>Mahasiswa</a>
</li>
<li>
<a href="dosen.php"><i class="fa fa-user fa-2x"></i>Dosen</a>
</li>
</ul>
</div>
<div class= "container col-md-10">
<div class="row">   
<div class="col-md-12">
<form	method="post"action="aksi_tambahmahasiswa.php" class="form-horizontal">
<h2>Tambah Mahasiswa</h2>
<div	class="form-group">
<label	class="col-sm-1 control-label">NIM</label>
<div	class="col-sm-10">
<input type="text" name='nim' class="form-control">
</div>
</div>
<div	class="form-group">
<label	class="col-sm-1 control-label">Nama</label>
<div	class="col-sm-10">
<input type="text" class="form-control" name='nama'></textarea> </div>
</div>
<div	class="form-group">
<label class="col-sm-1 control-label">Tema KP</label>
<div	class="col-sm-10">
<input type="text" name='temakp' class="form-control"> </div>
</div>
<div	class="form-group">
<label class="col-sm-1 control-label">IPK</label>
<div	class="col-sm-10">
<input type="text" name='ipk' class="form-control"> </div>
</div>
<div	class="form-group">
<label class="col-sm-1 control-label">Jumlah SKS</label>
<div	class="col-sm-10">
<input type="text" name='jumlahsks' class="form-control"> </div>
</div>
<div	class="form-group">
<label class="col-sm-1 control-label">Tempat KP</label>
<div	class="col-sm-10">
<input type="text" name='tempatkp' class="form-control"> </div>
</div>
<div	class="form-group">
<label class="col-sm-1 control-label">Dosen Pembimbing 1</label>
<div	class="col-sm-10">
<select class="form-control" name='doswal'>
<?php	include "koneksi.php"; $query = "SELECT * FROM dosen"; $result	= mysqli_query($connect, $query) or die(mysqli_error($connect)); while	($row	= mysqli_fetch_array($result)) { ?>
<option value="<?php	echo	$row['id_dosen'];	?>"><?php	echo $row['nama_dosen']; ?></option>
<?php } ?>
</select>
</div>
</div>
<div	class="form-group">
<label class="col-sm-1 control-label">Dosen Pembimbing 2</label>
<div	class="col-sm-10">
<select class="form-control" name='doswal2'>
<?php	include "koneksi.php"; $query = "SELECT * FROM dosen"; $result	= mysqli_query($connect, $query) or die(mysqli_error($connect)); while	($row	= mysqli_fetch_array($result)) { ?>
<option value="<?php	echo	$row['id_dosen'];	?>"><?php	echo $row['nama_dosen']; ?></option>
<?php } ?>
</select>
</div>
</div>
<div	class="form-group">
<label class="col-sm-1 control-label">Dosen Pembimbing 3</label>
<div	class="col-sm-10">
<select class="form-control" name='doswal3'>
<?php	include "koneksi.php"; $query = "SELECT * FROM dosen"; $result	= mysqli_query($connect, $query) or die(mysqli_error($connect)); while	($row	= mysqli_fetch_array($result)) { ?>
<option value="<?php	echo	$row['id_dosen'];	?>"><?php	echo $row['nama_dosen']; ?></option>
<?php } ?>
</select>
</div>
</div>
<div class="form-group">
<label class="col-sm-1 control-label">Status</label>
<div	class="col-sm-10">
<input class="form-control" name='dosbing' value="Belum Disetujui" readonly>
</div>
</div>
<div	class="form-group">
<div	class="col-sm-offset-1 col-sm-4">
<button type='submit' name='submit' class='btn btn-primary'>Simpan</button>
</div>
</div>
</form>
</div>
</div>
</div>
</body>
</html>