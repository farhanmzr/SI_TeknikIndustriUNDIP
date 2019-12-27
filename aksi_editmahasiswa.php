<?php
include "koneksi.php";
$id=$_GET['id'];
$nim=$_POST ['nim'];
$nama=$_POST ['nama'];
$temakp=$_POST['temakp'];
$ipk=$_POST['ipk'];
$jumlahsks=$_POST['jumlahsks'];
$tempatkp=$_POST['tempatkp'];
$doswal=$_POST ['doswal'];
$doswal2=$_POST ['doswal2'];
$doswal3=$_POST ['doswal3'];
$dosbing=$_POST['dosbing'];
$query=mysqli_query($connect,"update mahasiswa set
nim='$nim',nama='$nama',temakp='$temakp',ipk='$ipk',jumlahsks='$jumlahsks',tempatkp='$tempatkp',id_dosen='$doswal',id_dosen2='$doswal2',id_dosen3='$doswal3',dosbing='$dosbing' where id='$id'")
or die (mysqli_error($connect));
if ($query){
    header('location:koorkp_mahasiswa.php');
}else{
  echo mysqli_error($connect);
}
?>