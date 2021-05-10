<?php session_start(); ?>
<?php
        // gọi hàm kết nối viết sẳn
        require_once("connection.php");
        // truy cập cơ sỡ dữ liệu
        $sql ="select * from chuyenbay";
        $query = mysqli_query($con,$sql);
        
 if(mysqli_num_rows($query)>0){

        echo "<table class='w3-table w3-striped w3-bordered'>";
        echo "<tr>";
        echo "<div style='background-color: skyblue'>";
           echo "<td id='ok' style='border:1px solid black' style='background-color: skyblue'>";
             echo "ID chuyến bay";
           echo "</td>";
           echo "<td id='ok' style='border:1px solid black' style='background-color: skyblue'>";
             echo "ID máy bay";
           echo "</td>";
           echo "<td id='ok' style='border:1px solid black' style='background-color: skyblue'>";
             echo "ngày bay";
           echo "</td>";
           echo "<td id='ok' style='border:1px solid black' style='background-color: skyblue'>";
             echo "giờ bay";
           echo "</td>";
           echo "<td id='ok' style='border:1px solid black' style='background-color: skyblue'>";
             echo "điểm đi";
           echo "</td>";
           echo "<td id='ok' style='border:1px solid black' style='background-color: skyblue'>";
             echo "điểm đến";
           echo "</td>";
           echo "<td id='ok' style='border:1px solid black' style='background-color: skyblue'>";
             echo "gia";
           echo "</td id='ok'>";
           echo "</td id='ok'>";
           echo "</td id='ok'>";
           echo "</td id='ok'>";
           echo "</td id='ok'>";
           echo "</div>";
        echo "</tr>";
        while($dong = mysqli_fetch_array($query)){
        echo "<tr>";
            error_reporting(0);
            echo "<td style='border:1px solid black'>".$dong['idchuyenbay']."</td>";
            echo "<td style='border:1px solid black'>".$dong['idmaybay']."</td>";
            echo "<td style='border:1px solid black'>".$dong['ngaybay']."</td>";
            echo "<td style='border:1px solid black'>".$dong['giobay']."</td>";
            echo "<td style='border:1px solid black'>".$dong['diemdi']."</td>";
            echo "<td style='border:1px solid black'>".$dong['diemden']."</td>";
            echo "<td style='border:1px solid black'>".$dong['gia']."</td>";
            echo "<td style='border:1px solid black'><a href='adminxoachuyenbay.php?idchuyenbay=".$dong['idchuyenbay']."'>xóa chuyến bay</a></td>";
            echo "<td style='border:1px solid black'><a href='fixchuyenbay.php?idchuyenbay=".$dong['idchuyenbay']."'>Sữa</a></td>";    
        echo "</tr>";}
        echo "</table>";
    }
  


?>
<br/>
<a href="themchuyenbay.php">Thêm chuyến bay</a><br/>
<a href="dangxuat.php">đăng xuất</a><br/>
<a href="admincenter.php">quay trở lại trung tâm</a>

<!DOCTYPE html>
<html>
<title>quản lý chuyến bay</title>
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