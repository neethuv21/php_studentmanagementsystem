<?php
$con=mysqli_connect('localhost','root','','teacher');
session_start();
$id=$_GET['id'];
$sql="update register set status='2' where id='$id'";
mysqli_query($con,$sql);
header('location:tlogin.php');
?>