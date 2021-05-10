<?php 
 require_once("connection.php");
 $idve=$_POST['idve'];
 $idchuyenbay=$_POST['idchuyenbay'];
 $status=$_POST['status'];
 
 // sữa trạng thái vé máy bay
 $sql = "update ve set status='".$status."' where idve='".$idve."' and idchuyenbay='".$idchuyenbay."'";
 $query = mysqli_query($con,$sql);
 header("location: quanlyticket.php");
?>