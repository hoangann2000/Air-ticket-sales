<?php
 session_start();
 require_once("connection.php");
 $iduser=$_POST['iduser'];
 $username=$_POST['username'];
 $password=$_POST['password'];
 
 // session này cho biết chúng ta cần phải where từ thuộc tính nào
    $Origniduser = $_SESSION['saveiduser'];
 
 // sữa ID user 
   $sql = "update user set iduser='".$iduser."' where iduser='".$Origniduser."'";
   $query = mysqli_query($con,$sql);
 
 // sữa username
   $sql = "update user set username='".$username."' where iduser='".$Origniduser."'";
   $query = mysqli_query($con,$sql);
 
 // sữa password
   $sql = "update user set password='".$password."' where iduser='".$Origniduser."'";
   $query = mysqli_query($con,$sql);
   header("location: quanlykh.php");
?>