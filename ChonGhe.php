<?php 
session_start();
require_once("connection.php");
$idchuyenbay=$_GET['idchuyenbay'];
$_SESSION['saveidchuyenbay']=$idchuyenbay;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trang chọn ghế</title>
    <style type="text/css">
        #chonghe{
            font-size: 13px;
            line-height: 1.125;
            font-weight: 600;
            letter-spacing: .004em;
            font-family: "SF Pro Display","SF Pro Icons","Helvetica Neue","Helvetica","Arial",sans-serif;
            margin-top: .2em;
        }
        
        #columnmiddle{
            padding-left: 28px;
            width: 50%;
            height: 2200px;
            
        }

        #columnmiddle{
            float: left;    
        }

        /* đoạn này css cho checkbox */
            /* .squaredOne */
.squaredOne {
  width: 28px;
  height: 28px;
  position: relative;
  margin: 20px auto;
  background: #fcfff4;
  background: linear-gradient(top, #fcfff4 0%, #dfe5d7 40%, #b3bead 100%);
  box-shadow: inset 0px 1px 1px white, 0px 1px 3px rgba(0,0,0,0.5);
  label {
    width: 20px;
    height: 20px;
    position: absolute;
    top: 4px;
    left: 4px;
    cursor: pointer;
    background: linear-gradient(top, #222 0%, #45484d 100%);
    box-shadow: inset 0px 1px 1px rgba(0,0,0,0.5), 0px 1px 0px rgba(255,255,255,1);
    &:after {
      content: '';
      width: 16px;
      height: 16px;
      position: absolute;
      top: 2px;
      left: 2px;
      background: $activeColor;
      background: linear-gradient(top, $activeColor 0%, $darkenColor 100%);
      box-shadow: inset 0px 1px 1px white, 0px 1px 3px rgba(0,0,0,0.5);
      opacity: 0;
    }
    &:hover::after {
      opacity: 0.3;
    }
  }
  input[type=checkbox] {
    visibility: hidden;
    &:checked + label:after {
      opacity: 1;
    }   
  } 
}
/* end .squaredOne */

        

    </style>
</head>
<body>
    <section id="head-page" style="background-color: black">
    	<nav>
    		<li><img src="" style="width: 20%"></li>
    	    <li><img src="" style="">Home</li>
    	    <li><img src=""></li>
    	</nav>
    </section>

    <section>
      
    	<div id="columnmiddle" id="chonghe" style="background-image: url('maybaytheme.png');">
    		<div>
    			<form action="thucthichonghe.php" method="POST">
    				<table style="border-image-slice: ">
    					    <tr></tr><tr></tr><tr></tr><tr></tr>
                            <tr></tr><tr></tr><tr></tr><tr></tr>
                            <tr></tr><tr></tr><tr></tr><tr></tr>
                            <tr></tr><tr></tr><tr></tr><tr></tr>
                            <tr></tr><tr></tr><tr></tr><tr></tr>
                            <tr></tr><tr></tr><tr></tr><tr></tr>
                            <tr></tr><tr></tr><tr></tr><tr></tr>
    					    <tr></tr><tr></tr><tr></tr><tr></tr>
					        <tr></tr><tr></tr><tr></tr><tr></tr>
					        <tr></tr><tr></tr><tr></tr><tr></tr>
					        <tr></tr><tr></tr><tr></tr><tr></tr>
					        <tr></tr><tr></tr><tr></tr><tr></tr>
					        <tr></tr><tr></tr><tr></tr><tr></tr>
					        <tr></tr><tr></tr><tr></tr><tr></tr>

					    <tr>
    						<td>
                                <div class="squaredOne">
                                <?php
                                $sql="select status from ve where idve='a1' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a1'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>vip1</p>
                                </div>
    					    </td>
    					    <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a2' and idchuyenbay='".$idchuyenbay."'";
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a2'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>vip2</p>
                                </div>
					        </td>
					        <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a3' and idchuyenbay='".$idchuyenbay."'";
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a3'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>vip3</p>
                                </div>
					        </td>
    					</tr>

    					<tr>
    						<td>
                                <div class="squaredOne">
    						    <?php
                                $sql="select status from ve where idve='a4' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a4'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>vip4</p>
                                </div>
    					    </td>
    					    <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a5' and idchuyenbay='".$idchuyenbay."'";
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a5'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>vip5</p>
                                </div>
					        </td>
					        <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a6' and idchuyenbay='".$idchuyenbay."'";
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a6'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <p>vip6</p>
                                </div>
					        </td>
    					</tr>

    					<tr>
    						<td>
                                <div class="squaredOne">
    						    <?php
                                $sql="select status from ve where idve='a7' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a7'>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>vip7</p>
                                </div>
    					    </td>
    					    <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a8' and idchuyenbay='".$idchuyenbay."'";
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a8'>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>vip8</p>
                                </div>
					        </td>
					        <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a9' and idchuyenbay='".$idchuyenbay."'";
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a9'>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>vip9</p>
                                </div>
					        </td>
    					</tr>

                        <tr>
    						<td>
                                <div class="squaredOne">
    						    <?php
                                $sql="select status from ve where idve='a10' and idchuyenbay='".$idchuyenbay."'";
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a10'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>vip10</p>
                                </div>
    					    </td>
    					    <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a11' and idchuyenbay='".$idchuyenbay."'";
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a11'>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>vip11</p>
                                </div>
					        </td>
					        <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a12'and idchuyenbay='".$idchuyenbay."'";
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a12'>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>vip12</p>
                                </div>
					        </td>
    					</tr>
                        
                        <tr>
    						<td>
                                <div class="squaredOne">
    						    <?php
                                $sql="select status from ve where idve='a13' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a13'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>vip13</p>
                                </div>
    					    </td>
    					    <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a14' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a14'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>vip14</p>
                                </div>
					        </td>
					        <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a15' and idchuyenbay='".$idchuyenbay."'";
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a15'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>vip15</p>
                                </div>
					        </td>
					    </tr>    
                            
					        <tr></tr><tr></tr><tr></tr><tr></tr>
    					    <tr></tr><tr></tr><tr></tr><tr></tr>
					        <tr></tr><tr></tr><tr></tr><tr></tr>
					        <tr></tr><tr></tr><tr></tr><tr></tr>
					        <tr></tr><tr></tr><tr></tr><tr></tr>
					        <tr></tr><tr></tr><tr></tr><tr></tr>
    					    <tr></tr><tr></tr><tr></tr><tr></tr>
					        <tr></tr><tr></tr><tr></tr><tr></tr>

					        <tr>
    						<td>
                                <div class="squaredOne">
    						    <?php
                                $sql="select status from ve where idve='a16' and idchuyenbay='".$idchuyenbay."'";
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a16'>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a16</p>
                                </div>
    					    </td>
    					    <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a17' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a17'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a17</p>
                                </div>
					        </td>
					        <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a18' and idchuyenbay='".$idchuyenbay."'";
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a18'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a18</p>
                                </div>
					        </td>
    					</tr>

    					<tr>
    						<td>
                                <div class="squaredOne">
    						    <?php
                                $sql="select status from ve where idve='a19' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a19'>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a19</p>
                                </div>
    					    </td>
    					    <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a20' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a20'>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a20</p>
                                </div>
					        </td>
					        <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a21' and idchuyenbay='".$idchuyenbay."'";
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a21'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a21</p>
                                </div>
					        </td>
    					</tr>

    					<tr>
    						<td>
                                <div class="squaredOne">
    						    <?php
                                $sql="select status from ve where idve='a22' and idchuyenbay='".$idchuyenbay."'";
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a22'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a22</p>
                                </div>
    					    </td>
    					    <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a23' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a23'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a23</p>
                                </div>
					        </td>
					        <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a24' and idchuyenbay='".$idchuyenbay."'";
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a24'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a24</p>
                                </div>
					        </td>
    					</tr>

    					<tr>
    						<td>
                                <div class="squaredOne">
    						    <?php
                                $sql="select status from ve where idve='a25' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a25'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a25</p>
                                </div>
    					    </td>
    					    <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a26' and idchuyenbay='".$idchuyenbay."'";
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a26'>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a26</p>
                                </div>
					        </td>
					        <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a27' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a27'>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a27</p>
                                </div>
					        </td>
    					</tr>
                        
                        <tr>
    						<td>
                                <div class="squaredOne">
    						    <?php
                                $sql="select status from ve where idve='a28' and idchuyenbay='".$idchuyenbay."'";
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a28'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a28</p>
                                </div>
                            </td>
    					    </td>
    					    <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a29' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a29'>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a29</p>
                                </div>
					        </td>
					        <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a30' and idchuyenbay='".$idchuyenbay."'";
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a30'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a30</p>
                                </div>
					        </td>
    					</tr>

    					<tr>
    						<td>
                                <div class="squaredOne">
    						    <?php
                                $sql="select status from ve where idve='a31' and idchuyenbay='".$idchuyenbay."'";
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a31'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a31</p>
                                </div>
    					    </td>
    					    <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a32' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a32'>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a32</p>
                                </div>
					        </td>
					        <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a33' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a33'>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a33</p>
                                </div>
					        </td>
    					</tr>
                        
                        <tr>
    						<td>
                                <div class="squaredOne">
    						    <?php
                                $sql="select status from ve where idve='a34' and idchuyenbay='".$idchuyenbay."'";
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a34'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a34</p>
                                </div>
    					    </td>
    					    <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a35' and idchuyenbay='".$idchuyenbay."'";
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a35'>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a35</p>
                                </div>
					        </td>
    					</tr>

    					<tr>
    						<td>
                                <div class="squaredOne">
    						    <?php
                                $sql="select status from ve where idve='a36' and idchuyenbay='".$idchuyenbay."'";
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a36'>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a36</p>
                                </div>
    					    </td>
    					    <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a37' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a37'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a37</p>
                                </div>
					        </td>
					        <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a38' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a38'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a38</p>
                                </div>
					        </td>
    					</tr>
                        
                     
    					<tr>
    						<td>
                                <div class="squaredOne">
    						    <?php
                                $sql="select status from ve where idve='a39' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a39'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a39</p>
                                </div>
    					    </td>
    					    <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a40' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a40'>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a40</p>
                                </div>
					        </td>
					        <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a41' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a41'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a41</p>
                                </div>
					        </td>
    					</tr>
    					<tr>
    						<td>
                                <div class="squaredOne">
    						    <?php
                                $sql="select status from ve where idve='a42' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a42'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a42</p>
                                </div>
    					    </td>
    					    <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a43' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a43'>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a43</p>
                                </div>
					        </td>
					        <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a44' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a44'>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a44</p>
                                </div>
					        </td>
    					</tr>
    					<tr>
    						<td>
                                <div class="squaredOne">
    						    <?php
                                $sql="select status from ve where idve='a45' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a45'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a45</p>
                                </div>
    					    </td>
    					    <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a46' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a46'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a46</p>
                                </div>
					        </td>
					        <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a47' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a47'>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a47</p>
                                </div>
					        </td>
    					</tr>
    					<tr>
    						<td>
                                <div class="squaredOne">
    						    <?php
                                $sql="select status from ve where idve='a48' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a48'>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a48</p>
                                </div>
    					    </td>
    					    <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a49' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a49'>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a49</p>
                                </div>
					        </td>
					        <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a50' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a50'>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a50</p>
                                </div>
					        </td>
    					</tr>
    					<tr>
    						<td>
                                <div class="squaredOne">
    						    <?php
                                $sql="select status from ve where idve='a51' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a51'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a51</p>
                                </div>
    					    </td>
    					    <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a52' and idchuyenbay='".$idchuyenbay."'";
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a52'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a52</p>
                                </div>
					        </td>
					        <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a53' and idchuyenbay='".$idchuyenbay."'";
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a53'>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a53</p>
                                </div>
					        </td>
    					</tr>
    					<tr>
    						<td>
                                <div class="squaredOne">
    						    <?php
                                $sql="select status from ve where idve='a54' and idchuyenbay='".$idchuyenbay."'";
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a54'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a54</p>
                                </div>
    					    </td>
    					    <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a55' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a55'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a55</p>
                                </div>
					        </td>
					        <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a56' and idchuyenbay='".$idchuyenbay."'";
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a56'>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a56</p>
                                </div>
					        </td>
    					</tr>
    					<tr>
    						<td>
                                <div class="squaredOne">
    						    <?php
                                $sql="select status from ve where idve='a57' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a57'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a57</p>
                                </div>
    					    </td>
    					    <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a58' and idchuyenbay='".$idchuyenbay."'";
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a58'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a58</p>
                                </div>
					        </td>
					        <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a59' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a59'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a59</p>
                                </div>
					        </td>
    					</tr>
    					<tr>
    						<td>
                                <div class="squaredOne">
    						    <?php
                                $sql="select status from ve where idve='a60' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a60'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a60</p>
                                </div>
    					    </td>
    					    <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a61' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a61'>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a61</p>
                                </div>
					        </td>
					        <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a62' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a62'>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a62</p>
                                </div>
					        </td>
    					</tr>
    					<tr>
    						<td>
                                <div class="squaredOne">
    						    <?php
                                $sql="select status from ve where idve='a63' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a63'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a63</p>
                                </div>
    					    </td>
    					    <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a64' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a64'><br>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a64</p>
                                </div>
					        </td>
					        <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a65'and idchuyenbay='".$idchuyenbay."'";  
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a65'>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a65</p>
                                </div>
					        </td>
    					</tr>
    					<tr>
    						<td>
                                <div class="squaredOne">
    						    <?php
                                $sql="select status from ve where idve='a66' and idchuyenbay='".$idchuyenbay."'";  
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a66'>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a66</p>
                                </div>
    					    </td>
    					    <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a67' and idchuyenbay='".$idchuyenbay."'"; 
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a67'>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a67</p>
                                </div>
					        </td>
					        <td>
                                <div class="squaredOne">
					            <?php
                                $sql="select status from ve where idve='a68' and idchuyenbay='".$idchuyenbay."'";  
                                $query = mysqli_query($con,$sql);
                                $dong = mysqli_fetch_array($query);
                                if($dong['status']=="mua roi"){
                                echo "X";
                                }else{
                                echo "<input type='checkbox' id='squaredOne' name='ghe[]' value='a68'>";
                                }
                                ?>
                                <label for="squaredOne"></label>
                                <br/>
                                <p>a68</p>
                                </div>
					        </td>
    					</tr>
    					<tr>
    						
    					</tr><tr></tr><tr></tr><tr></tr>
    				</table>
    			
    		</div>
    	</div>
        <div id="columnside">
            <div>
                <br/><br/><br/><br/><br/><br/><br/><br/>
                <h1><strong>Hãy chọn ghế ngồi của bạn</strong></h1><br/>
                <h3>Bằng cách tick chuột phải vào các vị trí mà bạn muốn chọn</h3>
                <h3>Sau khi chọn xong, bạn hãy bấm gửi để tiếp tục</h3>
                <h4>*Lưu ý:</h4>
                <ul>
                    <li>"X" chỉ các ghế ngồi đã được mua, bạn không thể chọn các ghế này</li>
                    <li>VIP- đây là các ghế hạng thương gia</li>
                </ul>


            </div>
            <input type="submit" name="submit">
                </form>
        </div>
        
    </section>

</body>
</html>