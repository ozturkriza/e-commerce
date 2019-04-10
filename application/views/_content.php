<section>
<div class="container">
<div class="row">

<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Yeni Ürünler</h2>
						
						<?php
						
						foreach ($yeni as $rs)
						{ ?>
						
					
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<a href="<?=base_url()?>home/urundetay/<?=$rs->Id?>"> <img src="<?=base_url()?>uploads/<?=$rs->resim?>" height="200"   alt="" /></a>
											<h2><?=$rs->sfiyat?>TL</h2>
												<p><?=$rs->adi?></p>
											<a href="<?=base_url()?>home/urundetay/<?=$rs->Id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sepete Ekle</a>
										</div>
										
								</div>
								
							</div>
						</div>
						
						<?php }?>
				
						                            
					</div><!--features_items-->
					
					
					
					<div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">TAVSIYE EDILEN ÜRÜNLER</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
				
				
				
				 <?php
							$say =0;
							$aktf = null;
							foreach ($random as $rs)
							{ 	$say++;
								if($say==1)
								   $aktf="active";
								else
							        $aktf=null;
						        ?>
						
						
						
					      <div class="item <?=$aktf?>">
								<?php
					 foreach ($random as $rs)
						{ ?>
					
								<div class="col-sm-3">
									<div class="product-image-wrapper">
										<div class="single-products">
											<div class="productinfo text-center">
												<a href="<?=base_url()?>home/urundetay/<?=$rs->Id?>"> <img src="<?=base_url()?>uploads/<?=$rs->resim?>" height="200" alt="" /></a>
												<h2><?=$rs->sfiyat?>TL</h2>
												<p><?=$rs->adi?></p>
												<a href="<?=base_url()?>home/urundetay/<?=$rs->Id?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sepete Ekle</a>
											</div>
											
										</div>
									</div>
								</div>
								
						<?php }?>		
								
							</div>
							        
							<?php }?>
							
				
						
						
						
						
						
						

							</div>
							
							
							
							
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/recommended_items-->
					
				</div>
				</div>
		</div>
	</section>
				
				
				
