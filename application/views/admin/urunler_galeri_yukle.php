
<?php
		$this->load->view('admin\_header');
		$this->load->view('admin\_sidebar');
?>
   <div style="height: 900px; overflow: scroll; width: auto;">
<div class="inner-block">
    <div class="blank">
	
	<h2>Ürün Resim Galerisi Ekleme </h2>
	
    	<div class="blankpage-main">
		*Yüklenecek resim dosya türleri (gif|jpg|png) max boyutlar: 1024x1024,boyut:1000kb
		<?php if ($this->session->flashdata("mesaj")) {?>
		<div class="callout callout-info">
              <p class="label label-warning"><?=$this->session->flashdata("mesaj")?></p>
			   
		</div>
		<?php }?>
    		<form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?=base_url()?>admin/urunler/galeri_kaydet/<?=$id?>">
			<div class="inner ">
	   <h4>Eklenecek Resmi Seçiniz</h4> <br>
	   </div>
			<div class="form-group">                      
    
    <div class="col-sm-15">
      <input type="file" name="resim" class="form-control" id="email" placeholder="Yükleme için gözat" onchange="this.form.submit()">
    </div>
            </div>			
  
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
	<button type="submit" class="btn btn-info pull-right">RESMİ YÜKLE</button>
	      
    </div>
  </div>
</form>
          <?php foreach($veriler as $rs){?>
		  <img src="<?=base_url()?>uploads/<?=$rs->resim?>" height="50" >
		  <a href="<?=base_url()?>admin/urunler/galeri_sil/<?=$id?>/<?=$rs->Id?>"onclick="return confirm('Silinecek Emin Misin?')"class="btn btn-danger btn-sm"> Sil</a>
		  <?php }?>
		  
  	</div> 

    </div>
</div>

<?php
$this->load->view('admin\_footer');
?>
</div>

