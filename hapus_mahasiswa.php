<?php
include "koneksi.php";
$id=$_GET['id'];
$query=mysqli_query($connect,"delete from mahasiswa where id='$id'")
or die (mysqli_error($connect));
if ($query){
    header('location:koorkp_mahasiswa.php');
}else{
  echo mysqli_error($connect);
}
?>