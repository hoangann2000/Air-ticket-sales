<?php session_start(); ?>
<?php 
    // gọi lệnh kết nối với sql
       require_once("connection.php");
   
       if(isset($_POST["submit"])){
       	 // lấy thông số người dùng nhập vào textfield
       	$username=$_POST["username"];
       	$password=$_POST["password"];

       	if($username=="" || $password==""){
       		echo "không được để trống username và password";
       	}
       	else{
       		$sql = "select * from user where username = '".$username."' and password = '".$password."'";
       		$query = mysqli_query($con,$sql);

       		//nếu lấy ra được 1 dòng tức là đã có trùng khớp thông tin với nhau, xác thực thành công
       		$num_rows = mysqli_num_rows($query);
       		if ($num_rows==0) {
       			echo "tên đăng nhập không đúng";
       		}
       		else{
       			//tiến hành lưu tên đăng nhập vào session để xử lý sau này
        $sql="select*from user where username='".$username."'";
        $query = mysqli_query($con,$sql);
        while ($row=mysqli_fetch_array($query)) {
          # code...
          $_SESSION['iduser'] = $row['iduser'];
        }
        //display account name
				$_SESSION['username']=$username;
        $_SESSION['checkid'] = 1;
                // Thực thi hành động sau khi lưu thông tin vào session
                // tiến hành chuyển hướng trang web tới một trang khác
                header('Location: trangchu.php');
                
       		}
       	}
      if($username=="admin" && $password="333"){
        $_SESSION['checkid']= 2;
        header('Location: admincenter.php');
       }
      }
    ?>