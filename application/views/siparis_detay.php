<?php
$this->load->view('_header');
$this->load->view('_uyesidebar');

?>
    <div class="span9">
   <ul class="breadcrumb">
   <li><a href="<?=base_url()?>">Home</a><span class="divider">/</span></li>
   <li class="active">Sepetim</li>
   </ul>


   
   
						<?php if ($this->session->flashdata("mesaj")) {?>
						<div class="callout callout-info">
						<p><?=$this->session->flashdata("mesaj")?></p>
						</div>
                        <?php }?>
   

		  <div class="controls col-sm-9">
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
										    <td><a href="<?=base_url()?>uye/siparis_iptal/<?=$rs->Id?>" onclick="return confirm('İptal Edilecek Emin misin?')" class="btn btn-block btn-danger btn-xs"><i class="fa fa-remove"></i>İptal</a></td>
										  </tr>
											
											
											
											<?php } 
											?>
											
					         
                                        
                         </tbody>          <!--    </tbody>             -->
                                </table>
								Sipariş Toplam :<?=$toplam?> TL
								
                            </div>

 
 
  </div>
   </div>
   
  <?php
$this->load->view('_footer');

?>
  
  
