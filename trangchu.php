<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>AirLines</title>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reset1.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout1.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style1.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.5.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Cabin_400.font.js"></script>
<script type="text/javascript" src="js/tabs.js"></script>
<script type="text/javascript" src="js/jquery.jqtransform.js" ></script>
<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="js/atooltip.jquery.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!--[if lt IE 9]>
<script type="text/javascript" src="js/html5.js"></script>
<style type="text/css">.main, .tabs ul.nav a, .content, .button1, .box1, .top { behavior:url("../js/PIE.htc")}</style>
<![endif]-->
</head>
<body id="page1">
<div class="main">
  <!--header -->
  <header>
    <div class="wrapper">
      <h1><a href="index.html" id="logo">AirLines</a></h1>
      <span id="slogan">Fast, Frequent &amp; Safe Flights</span>
      <nav id="top_nav">
        <ul>
          <li><a href="dangnhap.php" class="nav1">Login</a></li>
          <li><a href="#" class="nav2">Singin</a></li>
          <li><a href="contacts.html" class="nav3"><?php error_reporting(0); if ($_SESSION['checkid'] == 1){echo $_SESSION['username'];}else{echo "Account";} 
                if ($_SESSION['checkid']==2){echo "Admin";}?></a></li>
        </ul>
      </nav>
    </div>
    <nav>
      <ul id="menu">
        <li id="menu_active"><a href="index.html"><span><span>Flight</span></span></a></li>
        <li><a href="offers.html"><span><span>Hotel</span></span></a></li>
        <li><a href="services.html"><span><span>Car for rent</span></span></a></li>
        
      </ul>
    </nav>
  </header>
  <!-- / header -->
  <!--content -->
  <section id="content">
    <div class="for_banners">
      <article class="col1">
        <div class="tabs">
          <ul class="nav">
            <li class="selected"><a href="#Flight">Flight</a></li>
            <li></li>
            <li class="end"></li>
          </ul>
          <div class="content">
            <div class="tab-content" id="Flight">
              <form id="form_1" action="#" method="post">
                <div>
                  <div class="wrapper"> <span class="right relative"><a href="timkiemmaybay.php" class="button1"><strong>Bất Đầu Tìm Kiếm</strong></a></span> <a href="#" class="link1">More Options</a> </div>
                </div>
              </form>
            </div>
            <div class="tab-content" id="Hotel">
              <form id="form_2" action="#" method="post">
                <div>
                  <div class="wrapper"> <span class="right relative"><a href="#" class="button1"><strong>Bất Đầu Tìm Kiếm</strong></a></span> <a href="#" class="link1">More Options</a> </div>
                </div>
              </form>
            </div>
            <div class="tab-content" id="Rental">
              <form id="form_3" action="#" method="post">
                <div>
                  <div class="wrapper"> <span class="right relative"><a href="#" class="button1"><strong>Bất Đầu Tìm Kiếm</strong></a></span> </div>
                </div>
              </form>
            </div>
          </div>
        </div>
		<div class="wrapper pad1"> </div>
      </article>
      <div id="slider"> <img src="images/banner1.jpg" alt=""> <img src="images/banner2.jpg" alt=""> <img src="images/banner3.jpg" alt=""> </div>
    </div>
    <div class="wrapper pad1">
      <article class="col1">
        <div class="box1">
          <h2 class="top">Offers of the Week from UK</h2>
          <div class="pad"> <strong>From Birmingham</strong><br>
            <ul class="pad_bot1 list1">
              <li> <span class="right color1">from GBP 143.-</span> <a href="book2.html">Zurich</a> </li>
            </ul>
            <strong>From London City</strong><br>
            <ul class="pad_bot1 list1">
              <li> <span class="right color1">from GBP 176.-</span> <a href="book2.html">Basel</a> </li>
              <li> <span class="right color1">from GBP 109.-</span> <a href="book2.html">Geneva</a> </li>
            </ul>
            <strong>From London Heathrow</strong><br>
            <ul class="pad_bot2 list1">
              <li> <span class="right color1">from GBP 100.-</span> <a href="book2.html">Geneva</a> </li>
              <li> <span class="right color1">from GBP 112.-</span> <a href="book2.html">Zurich</a> </li>
              <li> <span class="right color1">from GBP 88.-</span> <a href="book2.html">Basel</a> </li>
            </ul>
          </div>
          <h2>From Ireland To Switzerland</h2>
          <div class="pad"> <strong>From Dublin</strong><br>
            <ul class="pad_bot2 list1">
              <li class="pad_bot1"> <span class="right color1">from EUR 122.-</span> <a href="book2.html">Zurich</a> </li>
            </ul>
          </div>
        </div>
      </article>
      <article class="col2">
        <h3>Be inspired<span>See the whole world </span></h3>
        <div class="wrapper">
          <article class="cols">
            <figure><img src="images/page1_img1.jpg" alt="" class="pad_bot2"></figure>
            <p class="pad_bot1"><strong>VIP CLASS, Best way to enjoy your travel with full of service</p>
          </article>
          <article class="cols pad_left1">
            <figure><img src="images/page1_img2.jpg" alt="" class="pad_bot2"></figure>
            <p class="pad_bot1" style="color:black">Saving more money, when using food service at R7 hotel</p>
            <p>we have best food in Singapore with cheaper cost than any restaurent in the city</p>
          </article>
        </div>
        <a href="#" class="button1"><strong>Read More</strong></a> </article>
    </div>
	
	
	<div class="wrapper pad1">

      <article>
        <h3>Recommendations for you<span></span></h3>
        </article>

    </div>
	
	
  </section>
  <!--content end-->
  <!--footer -->
  <footer>
    <div class="wrapper">
      <ul id="icons">
        <li><a href="#" class="normaltip"><img src="images/icon1.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="images/icon2.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="images/icon3.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="images/icon4.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="images/icon5.jpg" alt=""></a></li>
        <li><a href="#" class="normaltip"><img src="images/icon6.jpg" alt=""></a></li>
      </ul>
      <div class="links">Copyright &copy; <a href="#"></a> <br>
         <a target="_blank" href="http://www.templatemonster.com/"></a></div>
    </div>
  </footer>
  <!--footer end-->
</div>
<script type="text/javascript">Cufon.now();</script>
<script type="text/javascript">
$(document).ready(function () {
    tabs.init();
});
jQuery(document).ready(function ($) {
    $('#form_1, #form_2, #form_3').jqTransform({
        imgPath: 'jqtransformplugin/img/'
    });
});
$(window).load(function () {
    $('#slider').nivoSlider({
        effect: 'fade', //Specify sets like: 'fold,fade,sliceDown, sliceDownLeft, sliceUp, sliceUpLeft, sliceUpDown, sliceUpDownLeft' 
        slices: 15,
        animSpeed: 500,
        pauseTime: 6000,
        startSlide: 0, //Set starting Slide (0 index)
        directionNav: false, //Next & Prev
        directionNavHide: false, //Only show on hover
        controlNav: false, //1,2,3...
        controlNavThumbs: false, //Use thumbnails for Control Nav
        controlNavThumbsFromRel: false, //Use image rel for thumbs
        controlNavThumbsSearch: '.jpg', //Replace this with...
        controlNavThumbsReplace: '_thumb.jpg', //...this in thumb Image src
        keyboardNav: true, //Use left & right arrows
        pauseOnHover: true, //Stop animation while hovering
        manualAdvance: false, //Force manual transitions
        captionOpacity: 1, //Universal caption opacity
        beforeChange: function () {},
        afterChange: function () {},
        slideshowEnd: function () {} //Triggers after all slides have been shown
    });
});
</script>
</body>
</html>