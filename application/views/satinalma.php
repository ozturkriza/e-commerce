<?php
$this->load->view('_header');
$this->load->view('_uyesidebar');

?>
    <div class="span9">
   <ul class="breadcrumb">
   <li><a href="<?=base_url()?>">Home</a><span class="divider">/</span></li>
   <li class="active">Satinalma Ödeme</li>
   </ul>


  


       <form class="form-horizontal"  method="post" action="<?=base_url()?>uye/siparis_tamamla">
			
              

                <?php if($this->session->flashdata("mesaj")){ ?>	
				<div class="callout callout-info">
					<p><?=$this->session->flashdata("mesaj")?></p>
			</div>
			<?php }?>			 

		------------------- Teslimat Bilgileri	-------------------	 
	<div class="control-group">  
          	
		<label class="control-label col-sm-2" for="inputFname">Adınız Soyadınız:</label>
		<div class="controls col-sm-6">
          <input type="text" name="adsoy" value="<?=$uye[0]->adsoy?>" class="form-control" placeholder="Ad Soyad Giriniz">
        </div>
    </div>
	
	<div class="control-group"> 
			<label class="control-label col-sm-2"  for="inputFname">Telefon Numarası:</label>
				<div class="controls col-sm-6">
				<input type="text" name="tel" class="form-control" value="<?=$uye[0]->tel?>"  placeholder="Telefon Giriniz">
			</div>
  </div>
	
	<div class="control-group">
    <label class="control-label col-sm-2" for="email">Adres:</label>
   	<div class="controls col-sm-6">
      <input type="text" name="adres" value="<?=$uye[0]->adres?>" class="form-control" id="email" placeholder="Adres Giriniz">
    </div>
  </div>
	
	 <div class="control-group">
    <label class="control-label col-sm-2" for="email">Şehir:</label>
   	<div class="controls col-sm-6">
      <input type="text" name="sehir" value="<?=$uye[0]->sehir?>" class="form-control" id="email" placeholder="Şehir Giriniz">
    </div>
  </div>
	
 
  
  <div class="control-group">
    <label class="control-label col-sm-2" for="pwd">Toplam Tutar :</label>
   	<div class="controls col-sm-6">
      <input type="text" name="toplam" readonly value="<?=$toplam?>" >
    </div>
  </div>
  *******************
  KREDİ KARTI BİLGİLERİ
  *******************
  <!--<input type="hidden" name="urun_id" value="<?=$uye[0]->adres?>" class="span6">-->
  
 
  
 <div class="control-group">
    
    	<div class="controls col-sm-6">
      <input type="submit" name="submitAccount" value="SİPARİŞİ TAMAMLA" class="exclusive shopBtn">
    </div>
  </div>
  
  </div>
 
 </form>
 
 
  </div>
  <?php
$this->load->view('_footer');

?>
  
  
