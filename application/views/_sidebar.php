<section>
<div class="container">
<div class="row">
<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Kategori</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
						
						<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#xxxx">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Diğer
										</a>
									</h4>
								</div>
								<div id="xxxx" class="panel-collapse collapse">
								
									<div class="panel-body">
										<ul>
										<?php foreach ($kategoriler as $rs) {?>	
											<li>								<h4 class="panel-title"><a href="<?=base_url()?>kategoriler/<?=$rs->Id?>"><?=$rs->adi?></a></h4>    </li>
										<?php }?>
                                           										
										</ul>
									</div>
									  
								</div>
							</div>
						   
			       <?php foreach ($kategoriler as $rs) {?>
						
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?=base_url()?>kategoriler/<?=$rs->Id?>"><?=$rs->adi?></a></h4>
								</div>
							</div>
							
							 <?php }?>  
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#womens">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											Womens
										</a>
									</h4>
								</div>
								<div id="womens" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
											<li><a href="">Fendi</a></li>
											<li><a href="">Guess</a></li>
											<li><a href="">Valentino</a></li>
											<li><a href="">Dior</a></li>
											<li><a href="">Versace</a></li>
										</ul>
									</div>
								</div>
							</div>
							
						</div>
						                                                                   
					               									   
						<div class="price-range"><!--price-range-->
							<h2>Fiyat Aralığı</h2>
							<div class="well text-center">
								 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
								 <b class="pull-left">0TL</b> <b class="pull-right">600TL</b>
							</div>
						</div><!--/price-range-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="<?=base_url()?>assets/images/home/i.png" height="200" alt="" />
						</div><!--/shipping-->
					
					</div>
</div>

				