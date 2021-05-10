<?php session_start(); ?>
<?php
        // gọi hàm kết nối viết sẳn
        require_once("connection.php");
        // truy cập cơ sỡ dữ liệu
        $sql ="select * from ve";
        $query = mysqli_query($con,$sql);
        
 if(mysqli_num_rows($query)>0){

        echo "<table class='w3-table w3-striped w3-bordered'>";
        echo "<div style='background-color: skyblue'>";
        echo "<tr>";
           echo "<td id='ok' style='border:1px solid black'>";
             echo "ID vé";
           echo "</td>";
           echo "<td id='ok' style='border:1px solid black'>";
             echo "id chuyến bay";
           echo "</td>";
           echo "<td id='ok' style='border:1px solid black'>";
             echo "status";
           echo "</td>";
           echo "</div>";
        echo "</tr>";
        while($dong = mysqli_fetch_array($query)){
        echo "<tr>";
            error_reporting(0);
            echo "<td style='border:1px solid black'><a href='fixidve.php'>".$dong['idve']."</a></td>";
            echo "<td style='border:1px solid black'><a href='fixidchuyenbay.php'>".$dong['idchuyenbay']."</a></td>";
            echo "<td style='border:1px solid black'><a href='fixstatus.php'>".$dong['status']."</a></td>";  
            echo "<td style='border:1px solid black'><a href='fixticket.php'>Sữa</a></td>";
        echo "</tr>";}
        echo "</table>";
    }
?>
<br/>
<a href="themticket.php">Thêm vé máy bay</a><br/>
<a href="dangxuat.php">đăng xuất</a><br/>
<a href="admincenter.php">quay trở lại trung tâm</a>

<!DOCTYPE html>
<html>
<title>quản lý vé máy bay</title>
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