<?php
//isikan dengan query select data
include "koneksi.php";
$id = $_GET['id'];
$query = mysqli_query($connect, "select * from mahasiswa where id='$id'") or die(mysqli_error($connect));

while ($res = mysqli_fetch_array($query)) {
    $nim = $res['nim'];
    $nama = $res['nama'];
    $temakp = $res['temakp'];
    $ipk = $res['ipk'];
    $jumlahsks = $res['jumlahsks'];
    $tempatkp = $res['tempatkp'];
    $id_dosen = $res['id_dosen'];
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
    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
                <a class="active-menu" href="koorkp_mahasiswa.php"><i class="fa	fa-user	fa-2x"></i>Mahasiswa</a>
            </li>
            <li>
                <a href="koorkp_dosen.php"><i class="fa fa-user fa-2x"></i>Dosen</a>
            </li>
        </ul>
    </div>
    <div class="container col-md-10">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="aksi_editmahasiswa.php?id=<?php echo  $id;  ?>" class='form-horizontal'>
                    <h2>Edit Data Mahasiswa</h2>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Nama</label>
                        <div class="col-sm-10">
                            <input value="<?php echo $nama; ?>" type="text" class="form-control" name='nama' value="<?php echo $row['nama']; ?>"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">NIM</label>
                        <div class="col-sm-10">
                            <input value="<?php echo $nim; ?>" type="text" name='nim' class="form-control" value="<?php echo $row['nim']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Tema KP</label>
                        <div class="col-sm-10">
                            <input value="<?php echo $temakp; ?>" type="text" name='temakp' class="form-control" value="<?php echo $row['temakp']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">IPK</label>
                        <div class="col-sm-10">
                            <input value="<?php echo $ipk; ?>" type="text" name='ipk' class="form-control" value="<?php echo $row['ipk']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Jumlah SKS</label>
                        <div class="col-sm-10">
                            <input value="<?php echo $jumlahsks; ?>" type="text" name='jumlahsks' class="form-control" value="<?php echo $row['jumlahsks']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Tempat KP</label>
                        <div class="col-sm-10">
                            <input value="<?php echo $tempatkp; ?>" type="text" name='tempatkp' class="form-control" value="<?php echo $row['tempatkp']; ?>">
                        </div>
                    </div>
            
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Dosen Pembimbing 1</label>
                        <div class="col-sm-10">
                            <select class="form-control" name='doswal'>
                                <?php include "koneksi.php";
                                $query = "SELECT * FROM dosen";
                                $querydoswal = "SELECT id_dosen FROM mahasiswa where id= $id";
                                $result    = mysqli_query($connect, $query) or die(mysqli_error($connect));
                                $resultdoswal = mysqli_query($connect, $querydoswal) or die(mysqli_error($connect));
                                $rowdoswal    = mysqli_fetch_array($resultdoswal);
                                while ($row    = mysqli_fetch_array($result)) {
                                    ?>
                                    <option value="<?php echo $row['id_dosen']; ?>" <?php if ($row['id_dosen'] == $rowdoswal['id_dosen']) echo 'selected = "selected"'; ?>><?php echo $row['nama_dosen']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Dosen Pembimbing 2</label>
                        <div class="col-sm-10">
                            <select class="form-control" name='doswal2'>
                                <?php include "koneksi.php";
                                $query = "SELECT * FROM dosen";
                                $querydoswal = "SELECT id_dosen2 FROM mahasiswa where id= $id";
                                $result    = mysqli_query($connect, $query) or die(mysqli_error($connect));
                                $resultdoswal = mysqli_query($connect, $querydoswal) or die(mysqli_error($connect));
                                $rowdoswal    = mysqli_fetch_array($resultdoswal);
                                while ($row    = mysqli_fetch_array($result)) {
                                    ?>
                                    <option value="<?php echo $row['id_dosen']; ?>" <?php if ($row['id_dosen'] == $rowdoswal['id_dosen2']) echo 'selected = "selected"'; ?>><?php echo $row['nama_dosen']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Dosen Pembimbing 3</label>
                        <div class="col-sm-10">
                            <select class="form-control" name='doswal3'>
                                <?php include "koneksi.php";
                                $query = "SELECT * FROM dosen";
                                $querydoswal = "SELECT id_dosen3 FROM mahasiswa where id= $id";
                                $result    = mysqli_query($connect, $query) or die(mysqli_error($connect));
                                $resultdoswal = mysqli_query($connect, $querydoswal) or die(mysqli_error($connect));
                                $rowdoswal    = mysqli_fetch_array($resultdoswal);
                                while ($row    = mysqli_fetch_array($result)) {
                                    ?>
                                    <option value="<?php echo $row['id_dosen']; ?>" <?php if ($row['id_dosen'] == $rowdoswal['id_dosen3']) echo 'selected = "selected"'; ?>><?php echo $row['nama_dosen']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-1 control-label">Setujui Dosen Pembimbing</label>
                        <div class="col-sm-10">
                                                    <select class="form-control" name='dosbing'>
                                                        <?php include "../koneksi.php";
                                                        $query = "SELECT * FROM dosen";
                                                        $querydosbing = "SELECT id_dosen FROM mahasiswa where id= $id";
                                                        $result    = mysqli_query($connect, $query) or die(mysqli_error($connect));
                                                        $resultdosbing = mysqli_query($connect, $querydosbing) or die(mysqli_error($connect));
                                                        $rowdosbing    = mysqli_fetch_array($resultdosbing);
                                                        while ($row    = mysqli_fetch_array($result)) {
                                                            ?>
                                                            <option value="<?php echo $row['id_dosen']; ?>" <?php if ($row['id_dosen'] == $rowdosbing['id_dosen']) echo 'selected = "selected"'; ?>><?php echo $row['nama_dosen']; ?></option>
                                                        <?php } ?>
                                                    </select></div>
                            
                           
                    </div> <br>
                    <div class="form-group">
                        <div class="col-sm-offset-1 col-sm-4">
                            <button type='submit' name='submit' class='btn btn-primary'>Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>