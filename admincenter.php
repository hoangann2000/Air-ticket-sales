<?php session_start(); 
if ($_SESSION['checkid'] == 2) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>trung tâm admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0">
  <h1>Trang quản trị web của Amin</h1>
  <p></p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Chào mừng Admin, hãy chọn quyền:</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="quanlyticket.php">Quản lý Ticket</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="quanlychuyenbay.php">Quản lý chuyến bay</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="quanlykh.php">Quản lý khách hàng</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Xemdanhsachdonhang.php">Xem DS các hóa đơn</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Xemdoanhthu.php">Xem doanh thu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dangxuat.php">Đăng xuất</a>
      </li>   
    </ul>
  </div>  
</nav>

<div>
    <div style="background-image: url('worktheme3.png');" style="background-repeat: no-repeat;">
      <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
      <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
      <br/><br/><br/>
      
      
    </div>
</div>
</body>
</html>
<?php }
else{
  echo "bạn chưa đăng nhập dưới vai trò quản trị viên";
}
?>