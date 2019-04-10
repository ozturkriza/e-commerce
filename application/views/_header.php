<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<title><?=$sayfa?> <?=$veri[0]->adi?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$veri[0]->description?>">
	<meta name="keywords" content="<?=$veri[0]->keywords?>">
    <meta name="author" content="">
   
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/price-range.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/animate.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/main.css" rel="stylesheet">
	<link href="<?=base_url()?>assets/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?=base_url()?>assets/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>assets/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>assets/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>assets/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?=base_url()?>assets/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								
								<li><a href="<?=base_url()?>home/bize_yazin"><i class="fa fa-envelope"></i> oztrkriza@hotmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
								
								<li><a href="https://www.google.com.tr"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="<?=base_url()?>"><img src="<?=base_url()?>assets/images/home/logo.png" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							
							
							
							
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
						<div class="col-sm-3">
						        <div class="search_box pull-right">
						     	<input type="text" placeholder="Search"/>
						         </div>
						        </div>
							<ul class="nav navbar-nav">
								<li><a href="<?=base_url()?>uye/hesabim"><i class="fa fa-user"></i> Hesap</a></li>
								
								<li><a href="<?=base_url()?>uye/cikis"><i class="fa fa-crosshairs"></i> Çıkış</a></li>
								<li><a  href="<?=base_url()?>uye/sepetim" ><i class="fa fa-shopping-cart"></i> Sepetim</a></li>
								
								
						<!--		<a class="<?=$sepetim?>" href="<?=base_url()?>uye/sepetim"><span class="fa fa-shopping-cart"></span>Sepet<span class="badge-warning"><?=$sepet[0]->say?></span></a>      -->
								<!--sdddddddddddddfdsffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff-->
		 
						
				   
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
							
							<?php 
							$anasayfa=null;
							$hakkimizda=null;
							$iletisim=null;
							$bize_yazin=null;
							if($menu=="anasayfa")
								$anasayfa="active";
							if($menu=="hakkimizda")
								$hakkimizda="active";
							if($menu=="iletisim")
								$iletisim="active";
							if($menu=="bize_yazin")
								$bize_yazin="active";
							if($menu=="uye")
								$uye="active";
							if($menu=="sepetim")
								$sepetim="active";
							
							?>
								<li><a href="<?=base_url()?>" class="<?=$anasayfa?>">Anasayfa</a></li>
								<li><a href="<?=base_url()?>home/hakkimizda" class="<?=$hakkimizda?>">Hakkımızda</a></li>
								
								
								<li><a href="<?=base_url()?>home/bize_yazin" class="<?=$bize_yazin?>">Bize Yazın</a></li>
								<li><a href="<?=base_url()?>home/iletisim" class="<?=$iletisim?>">İletişim</a></li>
								<li><a href="<?=base_url()?>home/kampanyalar">Kampanyalar</a></li>
							<!--	 <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="cart.html">Cart</a></li> 
										<li><a href="login.html">Login</a></li> 
                                    </ul>
                                </li> -->
							<!--		<li class="dropdown"><a href="#">Login<i class="fa fa-angle-down"></i></a>
								
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
									 
                                </li> -->
								
							<!--	----------------------------	-->
								
	<!--		----------------------------- -->
								
							</ul>
			
						</div>
						
					</div>
					<ul class="nav pull-right">
			
			<?php   
			if($this->session->userdata("uye_session"))                      
			 { ?>	
		              <li class="dropdown ">            
			                <a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-lock"></span>
	                       <?=$this->session->uye_session["adsoy"]?> <b class="caret"></b></a>
						<div class="dropdown-menu">	
							<a href="<?=base_url()?>uye/hesabim">Hesap Bilgileri</a><br>
				 			<a href="<?=base_url()?>uye/sepetim">Sepetim</a><br>
							<a href="<?=base_url()?>uye/siparisler">Siparişlerim</a><br>
                            <a href="<?=base_url()?>uye/cikis">Çıkış</a><br>	
                          </div>
                        </li>
				 <?php }
				 else
				 {?>     
			
			
			
			     <li class="dropdown">
				       <a data-toggle="dropdown" class="dropdown-toggle" href="#"> <span class="icon-lock"></span> Login <b class="caret"></b></a></a> 
				      <div class="dropdown-menu">
					   <a href="<?=base_url()?>home/login_ol"><label class="checkbox">Yeni Üye Kaydı</label></a>
				       <a href="<?=base_url()?>uye/sifremi_unuttum"><label class="checkbox">Şifremi Unuttum</label></a>
				         
						 <form class="form-horizontal loginFrm"method="post" action="<?=base_url()?>home/login">
				     <div class="control-group">
				 	<input type="email" class="span2" name="eposta" id="inputEmail" placeholder="Email">
					</div>
						<div class="control-group">
						<input type="password" class="span2" id="inputPassword" placeholder="Password">
					</div>
						<div class="control-group">
						<label class="checkbox">
						<input type="checkbox">Beni Hatırla
						</label>
						<button type="submit" class="shopBtn btn-block">Login Ol</button>
						</div>
						</form>
						</div>
				</li>
				 <?php }
				 
				 ?>    
			</ul>
					
					</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->