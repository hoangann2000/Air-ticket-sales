<?php
 session_start();
 require_once("connection.php");
 $idchuyenbay=$_POST['idchuyenbay'];
 $idmaybay=$_POST['idmaybay'];
 $ngaybay=$_POST['ngaybay'];
 $giobay=$_POST['giobay'];
 $diemdi=$_POST['diemdi'];
 $diemden=$_POST['diemden'];
 $gia=$_POST['gia'];
 echo $gia;
 
 // session này cho biết chúng ta cần phải where từ thuộc tính nào
    $Orignidchuyenbay = $_SESSION['save'];
 
 // sữa ID vé chuyến bay 
   $sql = "update chuyenbay set idchuyenbay='".$idchuyenbay."' where idchuyenbay='".$Orignidchuyenbay."'";
   $query = mysqli_query($con,$sql);
 
 // sữa ID máy bay
   $sql = "update chuyenbay set idmaybay='".$idmaybay."' where idchuyenbay='".$Orignidchuyenbay."'";
   $query = mysqli_query($con,$sql);
 
 // sữa ngày bay
   $sql = "update chuyenbay set ngaybay='".$ngaybay."' where idchuyenbay='".$Orignidchuyenbay."'";
   $query = mysqli_query($con,$sql);

 // sữa giờ bay
   $sql = "update chuyenbay set giobay='".$giobay."' where idchuyenbay='".$Orignidchuyenbay."'";
   $query = mysqli_query($con,$sql);

 // sữa điểm đi
   $sql = "update chuyenbay set diemdi='".$diemdi."' where idchuyenbay='".$Orignidchuyenbay."'";
   $query = mysqli_query($con,$sql);

 // sữa điểm đến
   $sql = "update chuyenbay set diemden='".$diemden."' where idchuyenbay='".$Orignidchuyenbay."'";
   $query = mysqli_query($con,$sql);

 // sữa giá tiền
   $sql = "update chuyenbay set gia='".$gia."' where idchuyenbay='".$Orignidchuyenbay."'";
   $query = mysqli_query($con,$sql);   
   
   header("location: quanlychuyenbay.php");
?>