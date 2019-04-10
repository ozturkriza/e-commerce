<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>AdminPanel| Giriş </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<link href="<?=base_url()?>assets/admin/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!-- Custom Theme files -->
<link href="<?=base_url()?>assets/admin/css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!--js-->
<script src="<?=base_url()?>assets/admin/js/jquery-2.1.1.min.js"></script> 
<!--icons-css-->
<link href="<?=base_url()?>assets/admin/css/font-awesome.css" rel="stylesheet"> 
<!--Google Fonts-->
<link href='//fonts.googleapis.com/css?family=Carrois+Gothic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,500,600' rel='stylesheet' type='text/css'>
<!--static chart-->
</head>  
<body>	
   <div style="height: 1000px; overflow: scroll; width: auto;">
<div class="login-page">
    <div class="login-main">  	
    	           <div class="login-head">
	  	 	
	             <?php if($this->session->flashdata("mesaj"))
				 { ?>
	             <div class="alert alert-danger alert-dismissable">
                        <h4>Hata!!</h4>   
                        <p><?=$this->session->flashdata("mesaj")?></p>
				</div> 
		         <?php } ?> 
                						
				<h1>Giriş Yapınız</h1>
		           </div>      
			<div class="login-block">
				<form action="<?=base_url()?>admin/login/login_ol" method="post"> 
					<input type="text" name="email"  placeholder="Email" required="">
					 <input type="password" name="password" class="lock" placeholder="Password" required="">
					<div class="forgot-top-grids">
						<div class="forgot-grid">
							<ul>
								<li>
									<input type="checkbox" id="brand1" value="">
									<label for="brand1"><span></span>Hatırla</label>
								</li>
							</ul>
						</div>
						<div class="forgot">
							<a href="#">Şifremi Unuttum?</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<input type="submit" name="Sign In" value="Login">	
					<h3>Üye değil misiniz?<a href="signup.html"> Kaydolun</a></h3>				
					<h2>yada buradan giriş yapın</h2>
					<div class="login-icons">
						<ul>
							<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>						
						</ul>
					</div>
				</form>
			</div>
      </div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Shoppy. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
<!--COPY rights end here-->

<!--//scrolling js-->
		<script src="<?=base_url()?>assets/admin/js/jquery.nicescroll.js"></script>
		<script src="<?=base_url()?>assets/admin/js/scripts.js"></script>
		<!--//scrolling js-->
<script src="<?=base_url()?>assets/admin/js/bootstrap.js"> </script>
<!-- mother grid end here-->
</div>
</body>
</html>
