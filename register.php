<?php
require_once 'library/config.php';
require_once 'library/category-functions.php';
require_once 'library/product-functions.php';
require_once 'library/cart-functions.php';

$_SESSION['shop_return_url'] = $_SERVER['REQUEST_URI'];

$catId  = (isset($_GET['c']) && $_GET['c'] != '1') ? $_GET['c'] : 0;
$pdId   = (isset($_GET['p']) && $_GET['p'] != '') ? $_GET['p'] : 0;

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>r6 大飯店</title>
	  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">    
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
  </head><body background="房間/背景圖片.jpg">
	

    <div class="container">	
      <!-- 導覽列 -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- 導覽列的頁首 -->
          <div class="navbar-header"> <a class="navbar-brand" href="#">r6 大飯店</a>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"> <span class="sr-only">導覽按鈕</span></button></div>
          <!-- 導覽列的項目 -->
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">首頁</a></li>
				
			<li><a href="#">設施</a></li>
			  
              
				
              <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 房間<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="store.php">優雅套房</a></li>
                  <li><a href="store.php">總統套房</a></li>
				  <li><a href="store.php">藍色水玲瓏套房</a></li>
                  <li><a href="store.php">電競套房</a></li>
				  <li><a href="store.php">總裁套房</a></li>
                  <li><a href="store.php">綠意盎然套房</a></li>
		      </ul>  
				
           <li><a href="store.php">訂房</a></li>
<?php
if (isset($_SESSION['username']))
{
    if ($_SESSION['username'] != "") { 
?>
                <li><a href="cart.php">購物車</a></li>
                <li><a href="logout.php">登出</a></li>
<?php
    }
}
else
{
?>
                <li><a href="login.php">會員登入</a></li>
                <li><a href="register.php">會員註冊</a></li>
<?php
}
?>                
				<li><a href="search.php">查詢</a></li>
                <li><a href="admin/index.php">管理</a></li>
			  
          </div>
        </div>
      </nav><br>
	
      <marquee direction="right" height="30" scrollamount="5" behavior="alternate">歡迎光臨 r6 大飯店</marquee>
     <br>
   <!-- 輪播 -->
      <div id="myCarousel" class="carousel slide">
	    <!-- 輪播指示 -->
	    <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
			
        </ol>
		
		<!-- 輪播內容 -->
	    <div class="carousel-inner">
		  <!-- 第一個輪播項目 (包含圖片、標題與介紹) --> 
          <div class="item active">
  		    <img src="房間/風景.jpg" width="1200" height="799">
            <div class="carousel-caption">
              <h1>優美風景</h1>
              <p class="lead"></p>
            </div>
          </div>
		  

	
		  <!-- 第二個輪播項目 (包含圖片、標題與介紹) --> 
          <div class="item">
            <img src="房間/溫泉.jpg" width="1200" height="800">
            <div class="carousel-caption">
              <h1>舒服溫泉</h1>
              <p class="lead"></</p>
            </div>
          </div>
		  
          <!-- 第三個輪播項目 (包含圖片、標題與介紹) --> 
		  <div class="item">
		    <p><img src="房間/溫泉2.jpg" width="1200" height="800" >	        </p>
		    <div class="carousel-caption">
              <h1>獨特</h1>
              <p class="lead"> </p>
            </div>
          </div>
        </div>
		

		
		<!-- 輪播控制 -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span></a>
      </div>      
	  	
	  <!-- 警報效果 -->
	  <hr>
  <div class="alert alert-success alert-dismissible" role="alert" >
    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    <strong>高CP!! </strong><a href="藍色水玲瓏套房.php">現在一晚只要2000元</a><br>
	</div>
	  <div class="alert alert-success alert-dismissible" role="alert" >
	    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
      <strong>優美套房 </strong><a href="#">山景優美</a> </div>
	<div class="alert alert-success alert-dismissible" role="alert" >
	<button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    <strong>豪華套房 </strong><a href="總統套房.php">給您總統級的享受</a><br>
	</div><hr>
      
      <!-- 內容區 -->
	  <section>
	    <!-- 第一列 -->

    <div class="container">
    <center>
    
 <h1>會員中心</h1>
<?php
if (isset($_SESSION['username']))
{
    if ($_SESSION['username'] != "") { 
?>
   <h2>
    <p>&nbsp;</p>
				<form action="register_modify_finish.php" method="post" name="form" id="form">
    密碼
    <input type="password" name="pw" />
    <br />
       再一次密碼
        <input type="password" name="pw2" />
        <br />
        <br />
	<input type="submit" name="button" value="註冊" />
   </form>					
   </h2>

<?php
    }
}
else
{
?>
   <h2>
    <p>&nbsp;</p>
				<form action="register_finish.php" method="post" name="form" id="form">
      <p>帳號
        <input type="text" name="id" />
        <br />
    密碼
    <input type="password" name="pw" />
    <br />
       再一次密碼
        <input type="password" name="pw2" />
        <br />
    	信箱
        <input type="text" name="mail" />
        <br />
        地址
        <input type="text" name="address" />
        <br />
        <br />
	<input type="submit" name="button" value="註冊" />
   </form>					
   </h2>
<?php
}
?>

</center>
	</div> 	  
      <!-- 頁尾 -->
	  <hr>
	  <footer>        
        <!-- Start of CuterCounter Code -->
<a href="http://www.cutercounter.com/traditional-chinese-n/" target="_blank">
<p>瀏覽人數: <img src="http://www.cutercounter.com/hits.php?id=grppfxp&nd=3&style=45" border="0" alt="網站計數器"></p>
</a>
<!-- End of CuterCounter Code -->
        <p>&copy;2019 佛光大學 學生製作		</p>
        <p class="text-right"><a href="#">Back to top</a></p>
      </footer>
  </body>	
</html>  
