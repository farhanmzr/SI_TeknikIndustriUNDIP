<?php
include "koneksi.php";
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
$query=mysqli_query($connect,"insert into mahasiswa(nim,nama,temakp,ipk,jumlahsks,tempatkp,id_dosen,id_dosen2,id_dosen3,dosbing)values ('$nim','$nama','$temakp','$ipk','$jumlahsks','$tempatkp','$doswal','$doswal2','$doswal3','$dosbing')");
if ($query){
    header('location:mahasiswa.php');
}else{
  echo mysqli_error($connect);
}
?>