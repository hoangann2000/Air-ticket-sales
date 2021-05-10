<?php
session_start(); 
require_once("connection.php");
$idchuyenbay=$_SESSION['saveidchuyenbay'];
$ticketvip=array("a1","a2","a3","a4","a5","a6","a7","a8","a9","a10","a11","a12","a13","a14","a15");
$tong=0;
if (isset($_POST['submit'])) {
	# code...
	$ghe=$_POST['ghe'];
	foreach ($ghe as $idve) {
		echo $idve;
         //Thay đổi trạng thái ghế chưa mua thành đã mua rồi
	     $sql="update ve set status ='mua roi' where idve ='".$idve."' and idchuyenbay='".$idchuyenbay."'";
	     $query = mysqli_query($con,$sql);
         
         //tính tiền
         $sql="select gia from chuyenbay where idchuyenbay='".$idchuyenbay."'";
         $query = mysqli_query($con,$sql);
         $dong = mysqli_fetch_array($query);
           //lấy giá tiền của vé
           $gia = $dong['gia'];
 
           for ($i=0; $i <15 ; $i++) { 
             if($idve == $ticketvip[$i])
             {
              $thisisvip = 1;
              break;
             }
             else
             {
              $thisisvip = 0;
              continue;
             }
           }
             
             if ($thisisvip==1) {
               	//ghế vip thì thêm 500 đô la
                  $gia= $gia+500;
               	  $tong+=$gia;
         }else{
         	        $tong+=$gia;
         }
       
	}

  //lưu tổng tiền vào Session để hiển thị trong xem hóa đơn
         $_SESSION['savetongtien']=$tong;

  //lưu tên khách hàng va để lưu vào hóa đơn
         $username = $_SESSION['username'];


         //lưu vào bảng hóa đơn
           $sql ="INSERT INTO donhang (iddonhang,username,idchuyenbay,tongtien,ngay) 
  VALUES (NULL,'".$username."','".$idchuyenbay."',".$tong.",now())";
  $query = mysqli_query($con,$sql);


  //lưu các ghế đã mua vào chi tiết hóa đơn
  foreach ($ghe as $idve) {
      $sql = "INSERT INTO chitietdonhang (idchitietdonhang,username,ghe,ngay)
      VALUES (NULL,'".$username."','".$idve."',now())";
      $query = mysqli_query($con,$sql);
  }
  $_SESSION['SaveTicketChosen']=$_POST['ghe'];
  header('Location: viewticket.php');
}
?>