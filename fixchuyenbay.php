<?php
session_start(); 
$idchuyenbay=$_GET['idchuyenbay'];
$_SESSION['save']=$idchuyenbay;

require_once("connection.php");

        $sql ="select*from chuyenbay where idchuyenbay='".$idchuyenbay."'";
        $query = mysqli_query($con,$sql);
        while($dong = mysqli_fetch_array($query)){
?>
<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h3>Nhập thông tin vé muốn chỉnh sửa</h3>

<div>
  <form action="thucthifixchuyenbay.php" method="POST">
    <label for="fname">ID chuyến bay</label>
    <?php 
    echo "<input type='text' id='fname' name='idchuyenbay' value='".$dong['idchuyenbay']."'>";
    ?>
    

    <label for="lname">ID máy bay</label>
    <?php 
    echo "<input type='text' id='fname' name='idmaybay' value='".$dong['idmaybay']."'>";
    ?>

    <label for="fname">ngày bay</label>
    <?php 
    echo "<input type='text' id='fname' name='ngaybay' value='".$dong['ngaybay']."'>";
    ?>

    <label for="fname">giobay</label>
    <?php 
    echo "<input type='text' id='fname' name='giobay' value='".$dong['giobay']."'>";
    ?>

    <label for="fname">điểm đi</label>
    <?php 
    echo "<input type='text' id='fname' name='diemdi' value='".$dong['diemdi']."'>";
    ?>

    <label for="fname">điểm đến</label>
    <?php 
    echo "<input type='text' id='fname' name='diemden' value='".$dong['diemden']."'>";
    ?>

    <label for="fname">Gía vé</label>
    <?php 
    echo "<input type='text' id='fname' name='gia' value='".$dong['gia']."'>";
    }?>
  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>