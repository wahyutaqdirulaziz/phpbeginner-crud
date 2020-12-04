<?php

// Check If form submitted, insert form data into users table.
if(isset($_POST['submit'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $sandi = $_POST['password'];
  

    // include database connection file
    include_once("../koneksi.php");

    // Insert user data into table
    $result = mysqli_query($mysql, "INSERT INTO users(nama_lengkap,email,sandi) VALUES('$nama_lengkap','$email','$sandi')");

  // Show message when user added
  header("Location:../list_materi.php");
}
?>