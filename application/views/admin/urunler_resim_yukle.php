
<?php
		$this->load->view('admin\_header');
		$this->load->view('admin\_sidebar');
?>
   <div style="height: 900px; overflow: scroll; width: auto;">
<div class="inner-block">
    <div class="blank">
	
	<h2>Ürün Resim Ekleme </h2>
	
    	<div class="blankpage-main">
		*Yüklenecek resim dosya türleri (gif|jpg|png) max boyutlar: 1024x1024,boyut:1000kb
		<?php if ($this->session->flashdata("mesaj")) {?>
		<div class="alert alert-danger alert-dismissable">
                <p><?=$this->session->flashdata("mesaj")?></p>
		</div>
		<?php }?>
    		<form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?=base_url()?>admin/urunler/resim_kaydet/<?=$id?>">
			<div class="inner ">
	   <h4>Eklenecek Resmi Seçiniz</h4> <br>
	   </div>
			<div class="form-group">                      
    
    <div class="col-sm-15">
      <input type="file" name="resim" class="form-control" id="email" placeholder="Yükleme için gözat">
    </div>
            </div>			
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
	<button type="submit" class="btn btn-info pull-right">RESMİ YÜKLE</button>
	      
    </div>
  </div>
</form>
	 <img src="<?=base_url()?>uploads/<?=$veri[0]->resim?>" height="200">
  	</div> 

    </div>
</div>

<?php
$this->load->view('admin\_footer');
?>
</div>