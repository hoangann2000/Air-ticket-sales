<?php session_start();?>
<?php
       // gọi lệnh kết nối với sql
       require_once("connection.php");
   
       if(isset($_GET["submit"])){
       	 // lấy thông số người dùng nhập vào textfield
       	$TimeBatDau=$_GET['From'];
       	$TimeKetThuc=$_GET['To'];

       	$sql = "select iduser,iddonhang,tongtien,trangthai,ngay from donhang where ngay between '".$TimeBatDau."' and '".$TimeKetThuc."'";
       	$query = mysqli_query($con,$sql);

        $sqltongtien = "select sum(tongtien),iduser,iddonhang,tongtien,trangthai,ngay from donhang where ngay between '".$TimeBatDau."' and '".$TimeKetThuc."'";
        $querytongtien =  mysqli_query($con,$sqltongtien);


         if(mysqli_num_rows($query)>0){

        echo "<table class='w3-table w3-striped w3-bordered'>";
        echo "<tr>";
           echo "<td style='border:1px solid black'>";
             echo "ID đơn hàng";
           echo "</td>";
           echo "<td style='border:1px solid black'>";
             echo "ID chuyến bay";
           echo "</td>";
           echo "<td style='border:1px solid black'>";
             echo "tên người mua";
           echo "</td>";
           echo "<td style='border:1px solid black'>";
             echo "ngày mua";
           echo "</td>";
           echo "<td style='border:1px solid black'>";
             echo "tiền của hóa đơn";
           echo "</td>";
        echo "</tr>";
        while($dong = mysqli_fetch_array($query)){
        echo "<tr>";
            error_reporting(0);
            echo "<td style='border:1px solid black'>".$dong['iddonhang']."</td>";
            echo "<td style='border:1px solid black'>".$dong['idchuyenbay']."</td>";
            echo "<td style='border:1px solid black'>".$dong['username']."</td>";
            echo "<td style='border:1px solid black'>".$dong['ngay']."</td>";
            echo "<td style='border:1px solid black'>".$dong['tongtien']."</td>";
        echo "</tr>";
        }
        while ($dong = mysqli_fetch_array($querytongtien))
        {echo "<tr>";
            echo "<td style='border:1px solid black'>Tổng Tiền của các hóa đơn</td>";
            echo "<td style='border:1px solid black'>".$dong['sum(tongtien)']."</td>";
        echo "</tr>";}
        echo "</table>";
        }
      }
?>
<!DOCTYPE html>
<html>
<title>xem doanh thu</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</html>