
<?php   
        $this->load->view('_header');
		
?>

<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h1 >Uye Login</h1>
						<form method="post" action="<?=base_url()?>home/login">
				<?php if($this->session->flashdata("mesaj"))
				 { ?>	<div class="callout callout-info">
						<p><?=$this->session->flashdata("mesaj")?></p>
						</div>
				<?php }?>			 
							<input type="email" name="eposta" placeholder="Email Adres">
							<input type="password" name="password" placeholder="Şifre">
							
							<button type="submit" class="btn btn-default">Login Ol</button>
						</form>
					</div><!--/login form-->
				</div>
			<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"> 
			 				<h1>Uye Kaydı</h1>
						<form method="post" action="<?=base_url()?>home/uye_ekle"> 
							<input type="text" name="adsoy" placeholder="Ad Soyad">
							<input type="email" name="email" placeholder="Email Adres">
							<input type="password" name="password" placeholder="Şifre">
							<input type="text" name="tel"  placeholder="Telefon">
							<input type="text" name="adres" placeholder="Adres">
							<input type="text" name="durum" placeholder="Durum">
							<button type="submit" class="btn btn-default">Kaydol</button>
						</form>
					</div>          
			</div>  
			</div>
		</div>
		
		





	</section>
	
	<?php   
        $this->load->view('_footer');
		
?>