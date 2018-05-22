<?php 
include 'config/class.php';
session_destroy();

echo "<script>alert('Anda Telah Logout');</script>";
echo "<script>location='login.php';</script>";


 ?>