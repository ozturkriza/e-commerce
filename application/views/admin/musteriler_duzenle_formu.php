
<?php
		$this->load->view('admin\_header');
		$this->load->view('admin\_sidebar');
?>
   <div style="height: 900px; overflow: scroll; width: auto;">
<div class="inner-block" >
    <div class="blank">
	<h2>Müşteri Düzenleme Menüsü </h2>
	
    	<div class="blankpage-main">
    		<form class="form-horizontal"  method="post" action="<?=base_url()?>admin/musteriler/guncelle/<?=$veri[0]->Id?>" >
			
			
			<div class="form-group">                      
    <label class="control-label col-sm-2" for="email">Adı Soyadı</label>
    <div class="col-sm-10">
      <input type="text" name="adsoy" value="<?=$veri[0]->adsoy?>" class="form-control" id="email" placeholder="Ad Soyad Giriniz">
    </div>
            </div>
			
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Email:</label>
    <div class="col-sm-10">
      <input type="email" name="email" value="<?=$veri[0]->email?>" class="form-control" id="email" placeholder="Email Giriniz">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Şifre:</label>
    <div class="col-sm-10"> 
      <input type="password" name="password" value="<?=$veri[0]->password?>" class="form-control" id="pwd" placeholder="Şifre Giriniz">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2"  for="email">Telefon:</label>
    <div class="col-sm-10">
      <input type="text" name="tel" class="form-control" value="<?=$veri[0]->tel?>" id="tel" placeholder="Telefon Giriniz">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Şehir:</label>
    <div class="col-sm-10">
     <select class="form-control" name="sehir">
	                                          <option><?=$veri[0]->sehir?></option>
                                                <option>İstanbul</option>
                                                <option>İzmir</option>
                                                <option>Ankara</option>
                                                <option>Kars</option>
                                                <option>Karabük</option>
                                            </select>
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Adres:</label>
    <div class="col-sm-10">
      <input type="text" name="adres" value="<?=$veri[0]->adres?>" class="form-control" id="email" placeholder="Adres Giriniz">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Yetki:</label>
    <div class="col-sm-10">
     <select class="form-control" name="yetki">
                                               <option><?=$veri[0]->yetki?></option>
											   <option>üye</option>
											   <option>admin</option>
     </select>
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Durum:</label>
    <div class="col-sm-10">
     <select class="form-control" name="durum">
                                                <option><?=$veri[0]->durum?></option>
												<option>aktif</option>
                                                <option>pasif</option>                                            
                                            </select>
    </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
	<button type="submit" class="btn btn-info">Güncelle</button>
	      
    </div>
  </div>
</form>
    	</div> 
    </div>
</div>

<?php
$this->load->view('admin\_footer');
?>
</div>