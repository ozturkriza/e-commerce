


<?php
		$this->load->view('admin\_header');
		$this->load->view('admin\_sidebar');
?>
<div style="height: 900px; overflow: scroll; width: auto;">
<div class="inner-block" >
    <div class="blank">
	<h2>Sipariş Listesi<br>
	
	
	
	</h2>
	
    	
		
		<div class="panel-body">
                            <div class="table-responsive">
                         
								 <table class="table table-bordered">
                                  <tbody>  
                                        <tr>
                                            <th style="width: 10px">Nr</th>
											
                                            <th>Adı</th>
                                            <th>Fiyat</th>
											<th>Miktar</th>
											<th>Tutar</th>
											<th>İptal</th>
											
                                        </tr>
                        
						<?php 
						$rn=0;
						$toplam=0;
						foreach ($veriler as $rs)
						{ $rn++;
						$toplam+=$rs->tutar;
                         ?>               <tr>
                                            <td style="width:10px"><?=$rn?></td>
											
                                            <td><?=$rs->adi?></td>
                                            <td><?=$rs->fiyat?>TL</td>
                                            <td><?=$rs->adet?></td>
											<td><?=$rs->tutar?>TL</td>
										    <td><a href="#" onclick="return confirm('İptal Edilecek Emin misin?')" class="btn btn-block btn-danger btn-xs"><i class="fa fa-remove"></i>İptal</a></td>
										  </tr>
											
											
											
											<?php } 
											?>
											
					         
                                        
                         </tbody>          <!--    </tbody>             -->
                                </table>
								Sipariş Toplam :<?=$toplam?> TL
								
								 
								<form class="form-horizontal" method="post" action="<?=base_url()?>admin/siparisler/guncelle/<?=$siparisid?>">
									Kargo Bilgileri :<input class="form-control" value="<?=$veri[0]->kargo?>" type="text" name="kargo" ><br>
									İşlem :
									<select name="siparisdurumu" class="form-control">
									<option><?=$veri[0]->siparisdurumu?></option>
									
									<option>onaylandi</option>
									<option>iptal</option>
									<option>kargoda</option>
									<option>yeni</option>
									<option>tamamlandi</option>
									</select><br>
								Açıklama :<textarea class="form-control" name="aciklama" rows=5 cols=100> <?=$veri[0]->aciklama?></textarea><br>
									<button type="submit" class="shopBtn" value="Sepete Ekle" >GUNCELLE</button>
								</form>
								
								
								
								
								
								
								
                            </div>
                        </div>
		
    	
    </div>
</div>

<?php
$this->load->view('admin\_footer');
?>

</div>

