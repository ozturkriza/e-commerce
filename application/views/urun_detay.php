<?php   
        $this->load->view('_header');
		$this->load->view('_sidebar');
?>
 
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5"> 
							<div class="view-product">
							
							<img src="<?=base_url()?>uploads/<?=$veri[0]->resim?>" alt=""  />    
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">
									    <div class="item active">
										   <a href=""><img src="<?=base_url()?>uploads/<?=$veri[0]->resim?>" alt=""  /></a>
										  
										</div>
										<?php
						
						foreach ($resimler as $rs)
						{ ?>
										<div class="item">
										  <a href=""><img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt=""  /></a>
										  
										</div>
								<?php }?>		
										
										
									</div>

								  <!-- Controls -->
								  <a class="left item-control" href="#similar-product" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								  </a>
								  <a class="right item-control" href="#similar-product" data-slide="next">
									<i class="fa fa-angle-right"></i>
								  </a>
							</div>

						</div>
						
						 
						<div class="col-sm-7">
						<form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="<?=base_url()?>uye/sepete_ekle">     <!--category-tab-->
							<div class="product-information"><!--/product-information-->
								
								<h2><?=$veri[0]->adi?></h2>
								
								
								<span>
									<span><?=$veri[0]->sfiyat?>TL</span>
									<input type="hidden" name="urun_id" value="<?=$veri[0]->Id?>" class="span6">
								
									<button type="submit" class="btn btn-fefault cart" >
										<i class="fa fa-shopping-cart"></i>
										Sepete ekle
									</button>
								</span>
								<p><b>Stok :</b> <?=$veri[0]->stok?></p><input type="number" name="miktar" value="1" class="span6" placeholder="Qty." min="1" max="<?=$veri[0]->stok?>"/>
							<!--	<p><b>Durum:</b> <?=$veri[0]->durum?></p> -->
							</form>	
								
							</div><!--/product-information-->
						</div>
						 
					</div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#details" data-toggle="tab">Ürün Açıklama</a></li>
								<li><a href="#tag" data-toggle="tab">Tavsiye Edilen Ürünler</a></li>
								<li ><a href="#reviews" data-toggle="tab">Yorumlar</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade active in" id="details">
								<div class="col-sm-12">
									
									<p><b><?=$veri[0]->aciklama?></b></p>
									
									
									
								</div>
							</div>
							<div class="tab-pane fade" id="tag" >
								
								
								
						<?php
					foreach ($random as $rs)
						{ ?>
					
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<a href="<?=base_url()?>home/urundetay/<?=$rs->Id?>"> <img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="" /></a>
												<h2><?=$rs->sfiyat?>TL</h2>
												<p><?=$rs->adi?></p>
												<a href="<?=base_url()?>home/urundetay/<?=$rs->Id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sepete Ekle</a>
											</div>
											
										</div>
									</div>
								</div>
								
						<?php }?>		
							</div>
							
							
							<div class="tab-pane fade " id="reviews" >
					<div class="col-sm-12">
									<ul>
										<?php
										 date_default_timezone_set('Europe/Istanbul');	
										$tarih=date('d.m.y');
										$saat=date('h:i');{ ?>


										<li><a href=""><i class="fa fa-clock-o"></i> <?=$saat?> </a></li>
										
										<li><a href=""><i class="fa fa-calendar-o"></i><?=$tarih?></a></li>
										
										<?php }?>		
										
									</ul>
									
								
									<?php 
						          
						             foreach ($yor as $rs)
						            { 
                                         ?>			
						
						
	                       <div class="alert alert-info">
	                       
	                                <p><h4><?=$rs->isim?></h4></p>   
									<p><?=$rs->yorum?></p>     </div>    
									
									<?php	} ?>  
									<p><b>Yorumunuzu Yazın</b></p>    
									
								<form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="<?=base_url()?>home/yorum_kaydet">
										<span>
											<input type="text" name="isim" placeholder="Your Name"/>
											<input type="email" name="email" placeholder="Email Address"/>
										</span>
										<textarea name="yorum" ></textarea>
										<b>Rating: </b> <img src="<?=base_url()?>uploads/rating.png" />
										<button type="submit" class="btn btn-default pull-right">
											Gönder
										</button>
									</form>
								</div>         
							</div>
							
							
						</div>
					</div><!--/category-tab-->
					
					
					
				</div>
			</div>
		</div>
	</section>
	<?php   
        $this->load->view('_footer');
		
?>

	