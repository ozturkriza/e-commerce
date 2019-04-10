


<?php
		$this->load->view('admin\_header');
		$this->load->view('admin\_sidebar');
?>
<div style="height: 900px; overflow: scroll; width: auto;">
<div class="inner-block" >
    <div class="blank">
	<h2>Müşteri Listesi<br>
	<p><?=$this->session->flashdata("mesaj")?><i class="fa fa-check" aria-hidden="true"></i></p>
	
	
	</h2>
	<h3 class="box-title"><a href="<?=base_url()?>admin/musteriler/ekle" class="btn btn-info"><i class="fa fa-plus-square"></i> Üye Ekle </a></h3>
    	
		
		<div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Sıra No</th>
                                            <th>Adı Soyadı</th>
                                            <th>Email</th>
											<th>Telefon</th>
											<th>Adres</th>
											<th>Şehir</th>
											<th>Yetki</th>
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
                                            <td><?=$rs->adsoy?></td>
                                            <td><?=$rs->email?></td>
                                            <td><?=$rs->tel?></td>
											<td><?=$rs->adres?></td>
											 <td><?=$rs->sehir?></td>
											<td><?=$rs->yetki?></td>
											 <td><?=$rs->durum?></td>
											<td><a href="<?=base_url()?>admin/musteriler/duzenle/<?=$rs->Id?>" class="btn btn-success btn-sm"><i class="fa fa-edit" aria-hidden="true"></i> Düzenle</a></td>
											<td><a href="<?=base_url()?>admin/musteriler/sil/<?=$rs->Id?>"onclick="return confirm('Silinecek Emin Misin?')"class="btn btn-danger btn-sm"><i class="fa fa-times" aria-hidden="true"></i> Sil</a></td>
											
											
											
                                        </tr>
					<?php	} ?>          
                                        
                         </tbody>          <!--    </tbody>             -->
                                </table>
                            </div>
                        </div>
		
    	<!--<div class="blankpage-main">
    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
    	</div> -->
    </div>
</div>

<?php
$this->load->view('admin\_footer');
?>
</div>