<?php 
require_once("connection.php");
 $idve=$_POST['idve'];
 $idchuyenbay=$_POST['idchuyenbay'];
 $status=$_POST['status'];

 $sql = "insert into ve (idve,idchuyenbay,status) values ('".$idve."','".$idchuyenbay."','".$status."')";
 $query = mysqli_query($con,$sql);
 header("location: quanlyticket.php");
?>