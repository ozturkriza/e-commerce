
<?php
		$this->load->view('admin\_header');
		$this->load->view('admin\_sidebar');
?>
<div style="height: 900px; overflow: scroll; width: auto;">
<div class="inner-block" style="overflow: scroll;">
    <div class="blank">
	<h2>Ürün Düzenleme Menüsü </h2>
	
    	<div class="blankpage-main">
    	    <form class="form-horizontal" method="post" action="<?=base_url()?>admin/urunler/guncelle/<?=$veri[0]->Id?>" >
			<div class="form-group">                      
               <label class="control-label col-sm-2" for="email">Adı </label>
	
                 <div class="col-sm-10">
                    <input type="text" name="adi" value="<?=$veri[0]->adi?>" class="form-control" id="email" placeholder="Adı">                 
	 
                 </div>
            </div>
	
            <div class="form-group">
               <label class="control-label col-sm-2" for="email">Açıklama:</label>
                <div class="col-sm-10">
				
				<textarea name="aciklama" id="ckeditor"  rows=10 cols=139><?=$veri[0]->aciklama?></textarea> 

                </div>
             </div>
             <div class="form-group">
               <label class="control-label col-sm-2" for="email">Kategorisi:</label>
                 <div class="col-sm-10">
                     <select class="form-control" name="kategori">
	                                          <option value="<?=$veri[0]->kategori?>"><?=$veri[0]->katadi?></option>
                                              <?php foreach($veriler as $rs){?>
		                                            <option value="<?=$rs->Id?>"><?=$rs->adi?></option>
		                                       <?php }?>
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
                <label class="control-label col-sm-2" for="email">Gurubu:</label>
                 <div class="col-sm-10">
                   <select class="form-control" name="grubu">
                                                <option><?=$veri[0]->grubu?></option>
												<option>kampanya</option>
                                                <option>indirim</option>                                            
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
  <!-- Ckeditor -->
     <script src="<?=base_url()?>as/plugins/ckeditor/ckeditor.js"></script>                
     <script src="<?=base_url()?>as/js/pages/forms/editors.js"></script>      
	  <!-- Jquery Core Js -->
  <!--  <script src="<?=base_url()?>as/plugins/jquery/jquery.min.js"></script>-->
