<?php session_start(); ?>
<?php
        // gọi hàm kết nối viết sẳn
        require_once("connection.php");
        // truy cập cơ sỡ dữ liệu
        $sql ="select * from user";
        $query = mysqli_query($con,$sql);
        
 if(mysqli_num_rows($query)>0){

        echo "<table class='w3-table w3-striped w3-bordered'>";
        echo "<tr>";
           echo "<td id='ok' style='border:1px solid black' style='background-color: skyblue'>";
             echo "ID user";
           echo "</td>";
           echo "<td id='ok' style='border:1px solid black' style='background-color: skyblue'>";
             echo "username";
           echo "</td>";
           echo "<td id='ok' style='border:1px solid black' style='background-color: skyblue'>";
             echo "matkhau";
           echo "</td>";
        echo "</tr>";
        while($dong = mysqli_fetch_array($query)){
        echo "<tr>";
            error_reporting(0);
            echo "<td style='border:1px solid black'>".$dong['iduser']."</td>";
            echo "<td style='border:1px solid black'>".$dong['username']."</td>";
            echo "<td style='border:1px solid black'>".$dong['password']."</td>";    
            echo "<td style='border:1px solid black'><a href='adminxoakh.php?iduser=".$dong['iduser']."'>xóa khách hàng</a></td>";
            echo "<td style='border:1px solid black'><a href='fixkh.php?iduser=".$dong['iduser']."'>sữa</a></td>";    
        echo "</tr>";}
        echo "</table>";
    }
  


?>
<br/>
<a href="dangxuat.php">đăng xuất</a><br/>
<a href="admincenter.php">quay trở lại trung tâm</a>

<!DOCTYPE html>
<html>
<title>quản lý khách hàng</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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