<?php 
    session_start();
    if (isset($_POST['submit'])) {
      # code...
     
       require_once("connection.php");
       $diemdi = $_POST['diemdi'];
       $diemden = $_POST['diemden'];
       $ngaydi = $_POST['ngaydi'];
       $ngayve = $_POST['ngayve'];


       echo $diemdi; echo $diemden; echo $ngaydi; echo $ngayve;



        $sql = "select*from chuyenbay WHERE (diemdi='".$diemdi."' and diemden='".$diemden."' and ngaybay='".$ngaydi."') or (diemdi='".$diemdi."' and diemden='".$diemden."' and ngaybay='".$ngayve."')";
        $query = mysqli_query($con,$sql);
      
        

          echo "Đây là kết quả cho tìm kiếm của bạn:<br/>";
          echo "<table class='w3-table w3-striped w3-bordered'>";
          echo "<div style='background-color: skyblue'>";
        echo "<tr>";
           echo "<td id='ok' style='border:1px solid black'>";
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
             echo "loại vé";
           echo "</td>";
           echo "<td id='ok' style='border:1px solid black' style='background-color: skyblue'>";
             echo "điểm đi";
           echo "</td>";
           echo "<td id='ok' style='border:1px solid black' style='background-color: skyblue'>";
             echo "điểm đến";
           echo "</td>";
           echo "<td id='ok' style='border:1px solid black' style='background-color: skyblue'>";
             echo "giá";
           echo "</td>";
           echo "</div>";
        echo "</tr>";
          while($dong = mysqli_fetch_array($query)){
               echo "<tr>";
            //error_reporting(0);
            echo "<td style='border:1px solid black'>".$dong['idchuyenbay']."</td>";
            echo "<td style='border:1px solid black'>".$dong['idmaybay']."</td>";
            echo "<td style='border:1px solid black'>".$dong['ngaybay']."</td>";
            echo "<td style='border:1px solid black'>".$dong['giobay']."</td>";
            echo "<td style='border:1px solid black'>".$dong['diemdi']."</td>";
            echo "<td style='border:1px solid black'>".$dong['diemden']."</td>";
            echo "<td style='border:1px solid black'>".$dong['gia']."</td>";
            echo "<td style='border:1px solid black'><a href='ChonGhe.php?idchuyenbay=".$dong['idchuyenbay']."'>mua vé</a></td>"; 
        echo "</tr>";}
        echo "</table>";
          
         }
    else{
      echo "không tồn tại chuyến bay bạn cần tìm";
    }
?>

<!DOCTYPE html>
<html>
<title>LIST</title>
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