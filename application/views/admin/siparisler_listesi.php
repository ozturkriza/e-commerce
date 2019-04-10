


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
										    <th>Date</th>
                                            <th>Adı</th>
											<th>Tutar</th>
											<th>Şehir</th>
											<th>Durumu</th>
											<th>Detay</th>
											
                                        </tr>
                        
						<?php 
						$rn=0;
						
						foreach ($veriler as $rs)
						{ $rn++;
						
                         ?>               <tr>
                                            <td style="width:10px"><?=$rn?></td>
											
											
                                            <td><?=$rs->tarih?></td>
                                            <td><?=$rs->adsoy?></td>
                                            <td><?=$rs->tutar?>TL</td>
										    <td><?=$rs->sehir?></td>
											<td><?=$rs->siparisdurumu?></td>
										    <td><a href="<?=base_url()?>admin/siparisler/siparisdetay/<?=$rs->Id?>" class="btn btn-success btn-sm"><i class="fa fa-edit" aria-hidden="true"></i>Detay</a></td>
										  </tr>
											
											
											
											<?php } 
											?>
											
					         
                                        
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

