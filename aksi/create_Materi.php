<?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['submit'])) {
    $nama_materi = $_POST['nama_materi'];
    $link = $_POST['link'];
  

    // include database connection file
    include_once("../koneksi.php");

    // Insert user data into table
    $result = mysqli_query($mysql, "INSERT INTO list_belajar(nama_materi,link) VALUES('$nama_materi','$link')");

  // Show message when user added
  header("Location:../list_materi.php");
}
?>