<?php
include "koneksi.php";
$id=$_GET['id'];
$query=mysqli_query($connect,"delete from dosen where id_dosen=".$id) or die (mysqli_error($connect));
if ($query){
    header('location:koorkp_dosen.php');
}else{
  echo mysqli_error($connect);
}
?>