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
                <a class="active-menu" href="mahasiswa_dosen.php"><i class="fa	fa-user	fa-2x"></i>Dosen</a>
            </li>
             <li>
                <a href="mahasiswa_join.php"><i class="fa fa-user fa-2x"></i>Daftar Mahasiswa KP</a>
            </li>
            <li>
                <a href="logout.php"><i class="fa fa-sign-out fa-2x"></i>Log Out</a>
            </li>

        </ul>
    </div>
    <div class="container col-md-10"> 
         <form class="form-inline" method="POST" name="submit">  
         
          <div class="form-group mx-sm-3 mb-2">
            <label for="inputPassword2" class="sr-only">Search</label>
          </div>
          <input type="search" class="form-control" id="inputPassword2" placeholder="Cari dosen" name="keyword">
          <button type="submit" class="btn btn-primary mb-2" name="find">Search</button>
        </form>
        <br>
        <div class="row">
            <div class="col-md-12">
                <table class="tabletable-striped table-bordered">
                    <thead>
                        <!-- Judul kolom -->
                        <tr>
                            <th>Kode Dosen</th>
                            <th>Nama Dosen</th>
                            <th>NIP</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--  fungsi  select  padaphp taruh disini-->
                       <?php

                        $host = mysqli_connect('localhost','root','','siteknikindustrikp');

                          if (isset($_POST['find'])) {
                            $cari = $_POST['keyword']; 

                            if ($cari == "") {
                              $query = mysqli_query($host, "Select * from dosen");
                              while($row = mysqli_fetch_array($query)){
                                echo 'data tidak ditemukan';
                              ?>
                              <tr>
                                <td><?php echo $row['id_dosen']; ?></td>
                                <td><?php echo $row['nama_dosen']; ?></td>
                                <td><?php echo $row['nip']; ?></td>
                               
                                
                              </tr>
                              <?php }

                              # code...
                            }
                            else{
                              $query = mysqli_query($host, "Select * from dosen where nama like '%".$cari."%'");
                              while($row = mysqli_fetch_array($query)){
                              ?>
                              <tr>
                                <td><?php echo $row['id_dosen']; ?></td>
                                <td><?php echo $row['nama_dosen']; ?></td>
                                <td><?php echo $row['nip']; ?></td>
                              
                                
                              </tr>
                              <?php }
                            }
                            # code...
                          }
                          else{

                            $query = mysqli_query($host, "Select * from dosen");
                            while($row = mysqli_fetch_array($query)){
                            ?>
                            <tr>
                                <td><?php echo $row['id_dosen']; ?></td>
                                <td><?php echo $row['nama_dosen']; ?></td>
                                <td><?php echo $row['nip']; ?></td>
                                
                                
                            </tr>
                            <?php }

                          }

                          ?>                     
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>