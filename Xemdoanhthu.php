<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>
<head>
	<title>xem doanh thu</title>
	<style type="text/css">
    h1, h3 {
      text-align: center;
    }

    .blue-square-container {
      text-align: left;
    }

    .blue-square {
      background-color: white;
      width: 100px;
      height: 100px;
      display: inline-block;
    }

    .yellow-square {
      background-color: black;
      width: 100px;

      height: 100px;
      margin: 0 auto;
    }

    .green-square {
      background-color: black;
      width: 100px;
      height: 100px;
      position: absolute;
      left: 50%;
      margin-left: -50px;
    }

    input[type=text] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid skyblue;
  border-radius: 4px;
}

   #ok{
    text-align: center;
    width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 2px solid yellow;
  border-radius: 100px;
  background-color: skyblue;
   }
  </style>
		
</head>
<body>
<div style="background-image: url('maybaytheme2.png');">
  <div style="background-color: green">
   <div class="blue-square-container">
    <h1>Hãy nhập thời gian bạn muốn kiểm tra doanh thu</h1>
   </div>
  </div>  

  <div id="ok">
    <h3>Nhập thời gian mà bạn muốn kiểm doanh thu:</h3><br/>
    <form action="thucthixemdoanhthu.php" method="GET">
      
       <label for="fname"><strong>From:</strong></label>
       <input name="From" id="fname" type="text"><br/>
      
       <label for="lname"><strong>To:</strong></label>
       <input name="To" id="lname" type="text"><br/>
       <input type="submit" name="submit">
    </form>

      <div>
      <br/>
      <a href="admincenter.php">quay trở lại trung tâm</a>
     </div>

    <br/><br/><br/><br/><br/><br/><br/>
  </div>

  <br/><br/><br/><br/><br/><br/><br/>
    <br/><br/><br/><br/><br/><br/><br/>
    <br/><br/><br/><br/><br/><br/><br/>
</div>

  <div id="end">
    
  </div>

</body>
</html>