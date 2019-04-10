

<!--slider menu-->
    <div class="sidebar-menu">
		  	<div class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="#"> <span id="logo" ></span> 
			      <!--<img id="logo" src="" alt="Logo"/>--> 
			  </a> </div>		  
		    <div class="menu">
		      <ul id="menu" >
		        <li>
                        <a href="<?=base_url()?>admin"><i class="fa fa-dashboard"></i>Anasayfa</a>
                    </li>
                 				 <li>
                        <a href="<?=base_url()?>admin/musteriler"><i class="fa fa-user"></i> Müşteriler</a>
                    </li>
					<li>
                        <a href="<?=base_url()?>admin/urunler"><i class="fa fa-bar-chart-o"></i> Ürünler</a>
                    </li>
                    <li>
                        <a href="<?=base_url()?>admin/Siparisler"><i class="fa fa-shopping-cart"></i> Siparişler<span class="fa fa-angle-right" style="float: right"></span></a>
						<ul class="nav nav-second-level">
                            <li>
                                <a href="<?=base_url()?>admin/Siparisler/liste/yeni">Yeni siparişler</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>admin/Siparisler/liste/onaylandi">Onaylanan siparişler</a>
                            </li>
							<li>
                                <a href="<?=base_url()?>admin/Siparisler/liste/iptal">İptal Edilenler</a>
                            </li>
                            <li>
                                <a href="<?=base_url()?>admin/Siparisler/liste/kargoda">Kargodaki siparişler</a>
                                

                            </li>
							 <li>
                                <a href="<?=base_url()?>admin/Siparisler/liste/tamamlandi">Tamamlananlar</a>
                                

                            </li>
                        </ul>
                    </li>
		        
		          
		        
		        
		     
		        <li><a href="#"><i class="fa fa-envelope"></i><span>Web Mesajları</span><span class="fa fa-angle-right" style="float: right"></span></a>
		        	 <ul id="menu-academico-sub" >
			            <li id="menu-academico-avaliacoes" ><a href="<?=base_url()?>admin/home/emailler">Gelen kutusu</a></li>
			            <li id="menu-academico-boletim" ><a href="<?=base_url()?>admin/home/email_olustur">Email oluştur</a></li>
		             </ul>
		        </li>
		        <li>    
				        <a href="#"><i class="fa fa-cog"></i><span>Site ayarları</span><span class="fa fa-angle-right" style="float: right"></span></a>
                       
						<ul class="nav nav-second-level">
                            <li>
                                <a href="<?=base_url()?>admin/home/ayarlar">Site genel ayarları</a>
                            </li>
                           
                        </ul>
                    </li>
		         
		      </ul>
		    </div>
	 </div>
	<div class="clearfix"> </div>
</div>
<script>
var toggle = true;
            
$(".sidebar-icon").click(function() {                
  if (toggle)
  {
    $(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
    $("#menu span").css({"position":"absolute"});
  }
  else
  {
    $(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
    setTimeout(function() {
      $("#menu span").css({"position":"relative"});
    }, 400);
  }               
                toggle = !toggle;
            });
</script>