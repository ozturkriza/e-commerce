


<?php
		$this->load->view('admin\_header');
		$this->load->view('admin\_sidebar');
?>
<div style="height: 900px; overflow: scroll; width: auto;">
<div class="inner-block" >
    <div class="blank">
	<h2>Ürünler Listesi<br>
	<p><?=$this->session->flashdata("mesaj")?></p>
	
	
	</h2>
	<h3 class="box-title"><a href="<?=base_url()?>admin/urunler/ekle" class="btn btn-info"><i class="fa fa-plus-square"></i>Ürün Ekle </a></h3>
    	
		
		<div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th style="width: 10px">Sıra No</th>
                                            <th>Adı</th>
                                            <th>Kategori</th>
											<th>A.Fiyat</th>
											<th>S.Fiyat</th>
											<th>Resim</th>
											<th>Galeri</th>
											<th>Durum</th>
											<th>Düzenle</th>
											<th>Sil</th>
                                        </tr>
                                    </thead>
                        <tbody>      <!--      <tbody>   -->
						
						<?php 
						$sno=0;
						foreach ($veriler as $rs)
						{ $sno++;
                         ?>               <tr>
                                            <td style="width:10px"><?=$sno?></td>
                                            <td><?=$rs->adi?></td>
                                            <td><?=$rs->katadi?></td>
                                            <td><?=$rs->afiyat?></td>
											<td><?=$rs->sfiyat?></td>
										    <td>
											<?php if ($rs->resim){?>
											
											<a href="<?=base_url()?>admin/urunler/resim_yukle/<?=$rs->Id?>" > <img src="<?=base_url()?>uploads/<?=$rs->resim?>" height="50"></a>
											
											
											
											<?php } else {?>
											<a href="<?=base_url()?>admin/urunler/resim_yukle/<?=$rs->Id?>" class="btn btn-success btn-sm">Resim yükle</a>
											<?php }?>
											</td>
											 <td><a href="<?=base_url()?>admin/urunler/galeri_yukle/<?=$rs->Id?>" class="btn btn-success btn-sm">Galeri yükle</a></td>
										   <td><?=$rs->durum?></td>
										<td><a href="<?=base_url()?>admin/urunler/duzenle/<?=$rs->Id?>" class="btn btn-success btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> Düzenle</a></td>
											<td><a href="<?=base_url()?>admin/urunler/sil/<?=$rs->Id?>"onclick="return confirm('Silinecek Emin Misin?')"class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i> Sil</a></td>
											
											
											
                                        </tr>
					<?php	} ?>          
                                        
                         </tbody>          <!--    </tbody>             -->
                                </table>
                            </div>
                        </div>
		
    	
    </div>
</div>

<?php
$this->load->view('admin\_footer');
?>

</div>

