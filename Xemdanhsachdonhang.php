<?php session_start(); ?>
<?php
        // gọi hàm kết nối viết sẳn
        require_once("connection.php");
        // truy cập cơ sỡ dữ liệu
        $sql="SELECT * FROM donhang";
        $query = mysqli_query($con,$sql);
        
 if(mysqli_num_rows($query)>0){

        echo "<table class='w3-table w3-striped w3-bordered'>";
        echo "<tr>";
           echo "<div style='background-color: skyblue'>";
           echo "<td id='ok' style='border:1px solid black'>";
             echo "ID đơn hàng";
           echo "</td>";
           echo "<td id='ok' style='border:1px solid black'>";
             echo "tên người mua";
           echo "</td>";
           echo "<td id='ok' style='border:1px solid black'>";
             echo "ID chuyến bay";
           echo "</td>";
           echo "<td id='ok' style='border:1px solid black'>";
             echo "ngày mua";
           echo "</td>";
           echo "<td id='ok' style='border:1px solid black'>";
             echo "tổng tiền";
           echo "</td>";
           echo "<td id='ok' style='border:1px solid black'>";
           echo "</td>";
           echo "</div>";
        echo "</tr>";
        while($dong = mysqli_fetch_array($query)){
        echo "<tr>";
            error_reporting(0);
            echo "<td style='border:1px solid black'>".$dong['iddonhang']."</td>";
            echo "<td style='border:1px solid black'>".$dong['username']."</td>";
            echo "<td style='border:1px solid black'>".$dong['idchuyenbay']."</td>";
            echo "<td style='border:1px solid black'>".$dong['ngay']."</td>";
            echo "<td style='border:1px solid black'>".$dong['tongtien']."</td>";   
            echo "<td style='border:1px solid black'><a href='viewticket.php?iddonhang=".$dong['iddonhang']."&username=".$dong['username']."'>Xem đơn hàng</a></td>"; 
        echo "</tr>";}
        echo "</table>";
    }
  


?>
<br/>
<a href="xemdanhsachdonhangtheothoigian.php">Xem danh sách đơn hàng theo thời gian</a><br/>
<a href="dangxuat.php">đăng xuất</a><br/>
<a href="admincenter.php">quay trở lại trung tâm</a>

<!DOCTYPE html>
<html>
<title>quản lý đơn hàng</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<style type="text/css">
  #ok{
    padding: 8px 8px;
    display: table-cell;
    text-align: left;
    vertical-align: top;
    background-color: skyblue;
  }
</style>
</html>