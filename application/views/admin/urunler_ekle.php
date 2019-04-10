<?php
		$this->load->view('admin\_header');
		$this->load->view('admin\_sidebar');
?>
     <!-- Ckeditor -->
     <script src="<?=base_url()?>as/plugins/ckeditor/ckeditor.js"></script>                
     <script src="<?=base_url()?>as/js/pages/forms/editors.js"></script>      
<div style="height: 900px; overflow: scroll; width: auto;">
<div class="inner-block">
    <div class="blank">
	<h2>Ürün Ekleme </h2>
	
    	<div class="blankpage-main">
    		<form class="form-horizontal" method="post" action="<?=base_url()?>admin/urunler/ekle_kaydet">
			
			<div class="form-group">                      
    <label class="control-label col-sm-2" for="email">Adı </label>
    <div class="col-sm-10">
      <input type="text" name="adi" class="form-control" id="email" placeholder="Ad Giriniz">
    </div>
            </div>
			
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Kodu:</label>
    <div class="col-sm-10">
      <input type="text" name="kodu" class="form-control" id="email" placeholder="Kodu Giriniz">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Türü:</label>
    <div class="col-sm-10">
      <input type="text" name="turu" class="form-control" id="email" placeholder="Türü Giriniz">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Kategori:</label>
    <div class="col-sm-10">
      <input type="text" name="kategori" class="form-control" id="email" placeholder="Kategori Giriniz">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">A.Fiyat:</label>
    <div class="col-sm-10">
      <input type="text" name="afiyat" class="form-control" id="email" placeholder="A.Fiyat Giriniz">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">S.Fiyat:</label>
    <div class="col-sm-10">
      <input type="text" name="sfiyat" class="form-control" id="email" placeholder="S.Fiyat Giriniz">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Stok:</label>
    <div class="col-sm-10">
      <input type="text" name="stok" class="form-control" id="email" placeholder="Stok Giriniz">
    </div>
  </div>
  
   <div class="form-group">
    <label class="control-label col-sm-2" for="email">Description:</label>
    <div class="col-sm-10">
      <input type="text" name="description" class="form-control" id="email" placeholder="Description Giriniz">
    </div>
  </div>
  
   <div class="form-group">
    <label class="control-label col-sm-2" for="email">Keywoords:</label>
    <div class="col-sm-10">
      <input type="text" name="keywords" class="form-control" id="email" placeholder="Keywoords Giriniz">
    </div>
  </div>
  
   <div class="form-group">
    <label class="control-label col-sm-2" for="email">Açıklama:</label>
    <div class="col-sm-10">
	
	<textarea name="aciklama" id="editor1"  rows="30" cols="140" class="ckeditor"></textarea>
	
	 <script>
                         // Ckeditor ü  ön tanımlı  ayarları  kullanarak <textarea id="editor1"> nesnesi üzerinde aktif  ediyoruz
                        CKEDITOR.replace( 'editor1' );
                      </script>
      
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Durum:</label>
    <div class="col-sm-10">
     <select class="form-control" name="durum">
                                                <option>aktif</option>
                                                <option>pasif</option>                                            
                                            </select>
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Resim:</label>
    <div class="col-sm-10">
      <input type="text" name="resim" class="form-control" id="tel" placeholder="">
    </div>
  </div>

  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
	<button type="submit" class="btn btn-info">Kaydet</button>
	      
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
