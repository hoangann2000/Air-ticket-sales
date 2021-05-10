<?php 
$idve=$_GET['idve'];
$idchuyenbay=$_GET['idchuyenbay'];

require_once("connection.php");

        $sql ="select * from ve where idve='".$idve."' and idchuyenbay='".$idchuyenbay."'";
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
  <form action="thucthifixticket.php" method="POST">
    <label for="fname">ID vé</label>
    <?php 
    echo "<input type='text' id='fname' name='idve' value='".$dong['idve']."'>";
    ?>
    

    <label for="lname">ID chuyến bay</label>
    <?php 
    echo "<input type='text' id='fname' name='idchuyenbay' value='".$dong['idchuyenbay']."'>";
    }?>

    <label for="country">Trạng thái vé</label>
    <select id="country" name="status">
      <option value="chua mua">chua mua</option>
      <option value="mua roi">mua roi</option>
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>