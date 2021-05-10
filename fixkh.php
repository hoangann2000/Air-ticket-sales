<?php
session_start(); 
$iduser=$_GET['iduser'];
$_SESSION['saveiduser']=$iduser;

require_once("connection.php");

        $sql ="select*from user where iduser='".$iduser."'";
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

<h3>Nhập thông tin khách hàng muốn chỉnh sửa</h3>

<div>
  <form action="thucthifixkh.php" method="POST">
    <label for="fname">ID user</label>
    <?php 
    echo "<input type='text' id='fname' name='iduser' value='".$dong['iduser']."'>";
    ?>
    

    <label for="lname">username</label>
    <?php 
    echo "<input type='text' id='fname' name='username' value='".$dong['username']."'>";
    ?>

    <label for="fname">password</label>
    <?php 
    echo "<input type='text' id='fname' name='password' value='".$dong['password']."'>";
    }?>
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>