<?php   
        $this->load->view('_header');
		$this->load->view('_sidebar');
?>

<div class="col-sm-9">
			
						<h2 class="title text-center">Bize yazın</h2>
				<div class="well well-small">
							<h3>Bize İletmek İstediklerinizi Yazınız</h3>
							<?php if ($this->session->flashdata("mesaj")) {?>
								<div class="callout callout-info">
									<p class="label label-warning"><?=$this->session->flashdata("mesaj")?></p>
			   
								</div>
							<?php }?>
					<div class="span4">
	                     <div class="contact-form">
							
							<div class="status alert alert-success" style="display: none"></div>
							<form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="<?=base_url()?>home/mesaj_kaydet">
				                  <div class="form-group col-md-6">
				                     <input type="text" name="adsoy" class="form-control" required="required" placeholder="Adınız Soyadınız">
				                  </div>
									<div class="form-group col-md-6">
										<input type="text" name="tel" class="form-control" required="required" placeholder="Telefon Numaranız">
									</div>
								<div class="form-group col-md-12">
									<input type="email" name="email" class="form-control" required="required" placeholder="Email Adresiniz">
								</div>
								<div class="form-group col-md-12">
									<textarea name="mesaj"  required="required" class="form-control" rows="8" placeholder="Mesajınız"></textarea>
								</div>                        
								<div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Gönder">
								</div>
				             </form>
	    			     </div>
					</div>
							

							
							
				</div>
			<!--/blog-post-area-->

					
							
							
</div>
</div>
	</section> 
		
	 
	<?php   
        $this->load->view('_footer');
		
?>
