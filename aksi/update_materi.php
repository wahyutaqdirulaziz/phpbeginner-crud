<?php

if(isset($_POST['update'])) {
    $id = $_POST['id_list'];
    $nama_materi = $_POST['nama_materi'];
    $link = $_POST['link'];
  

    // include database connection file
    include_once("../koneksi.php");

  
    $result = mysqli_query($mysql,"UPDATE list_belajar SET nama_materi='$nama_materi',link='$link' WHERE id_list=$id");

    // Show message when user added
    header("Location:../list_materi.php");
}
?>