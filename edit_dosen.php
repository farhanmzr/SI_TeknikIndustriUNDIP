<?php
//isikan dengan query select data
include "koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($connect, "select * from dosen where id_dosen='$id'") or die(mysqli_error($connect));
while ($res = mysqli_fetch_array($query)) {
    $nidn = $res['nidn'];
    $nama = $res['nama_dosen'];
    $alamat = $res['alamat'];
    $email = $res['email'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sistem Informasi</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script type='javascript' src="assets/js/bootstrap.min.js"></script>
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
    <div class="col-md-2" align="left">
        <ul class="nav" id="main-menu">
            <br>
            <li>
                <a href="mahasiswa.php"><i class="fa fa-user fa-2x"></i>Mahasiswa</a>
            </li>
            <li>
                <a class="active-menu" href="dosen.php"><i class="fa	fa-user	fa-2x"></i>Dosen</a>
            </li>
        </ul>
    </div>
    <div class="container col-md-10">
        <div class="row">
            <div class="col-md-12">
                <form method='POST' action='aksi_editdosen.php?id=<?php echo    $id;    ?>' class='form-horizontal'>
                    <h2>Edit Data Dosen</h2>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">NIDN</label>
                        <div class="col-sm-10">
                            <input type="text" name='nidn' class="form-control" value="<?php echo $nidn; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name='nama_dosen' class="form-control" value="<?php echo $nama; ?>"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" name='alamat' class="form-control" value="<?php echo $alamat; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name='email' class="form-control" value="<?php echo $email; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-4">
                            <button type='submit' name='submit' class='btn btn-primary'>Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>

</html>