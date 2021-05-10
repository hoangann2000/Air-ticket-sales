<?php
session_start(); 
require_once("connection.php");
$idchuyenbay=$_SESSION['saveidchuyenbay'];
$username = $_SESSION['username'];
$tong = $_SESSION['savetongtien'];
$ticketvip=array("a1","a2","a3","a4","a5","a6","a7","a8","a9","a10","a11","a12","a13","a14","a15");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Viewticket</title>
	<style type="text/css">
		section{
			  width: 380px;
			  height: 680px;
			  border: 10px solid blue;
			  background-color: #1F71B4;
			  font-family: monospace;
			  font-size: 20px;
			  font-weight: normal;
			  font-color: black;
			  padding-left: 5px;
		}
	</style>
</head>
<body>
    <section>
<?php 
         // xuất ra các thông tin từ hóa đơn
$sql = "select*from donhang where username='".$username."'";
$query = mysqli_query($con,$sql);

echo "<p>------Hóa đơn của khách hàng------</p>";

	echo "<p>Tên khách hàng:</p>";
	echo "<p style='color:red'>".$username."</p>";
	echo "<p>Chuyến bay:</p>";
	echo "<p style='color:red'>".$idchuyenbay."</p>";

echo "----Các ghế khách hàng đã mua:----<br/>";
// xuất ra các thông tin từ chi tiết hóa đơn

foreach ($_SESSION['SaveTicketChosen'] as $idve) {


			$sql = "select*from chitietdonhang where ghe='".$idve."'";
			$query = mysqli_query($con,$sql);

			while ($dong = mysqli_fetch_array($query)) {
				echo "<p>Số ghế:</p>";
				echo "<p style='color:red'>".$dong['ghe']."<p>";


			for ($i=0; $i <15 ; $i++) { 
             if($dong['ghe'] == $ticketvip[$i])
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

			    if ($thisisvip==1)
			    {
			         echo "<p style='color:red'>-Đây là ghế hạng thương gia </p>";
			    }else{
			         echo "<p style='color:red'>-Đây là ghế hạng thường </p>";
			       }
			 
              }
       }
   echo "--------------------------------";
   echo "<p>Tổng tiền:</p>";
   echo $tong."<br/>";
   echo "Cảm ơn Qúy Khách";
?>
    </section>
</body>
</html>