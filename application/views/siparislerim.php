<?php
$this->load->view('_header');
$this->load->view('_uyesidebar');

?>
    <div class="span9">
   <ul class="breadcrumb">
   <li><a href="<?=base_url()?>">Home</a><span class="divider">/</span></li>
   <li class="active">Siparişlerim</li>
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
											<td>
											<?php if ($rs->siparisdurumu=="kargoda")
											{
											?>
											<a href="<?=$rs->kargo?>" target="_blank" class="btn btn-success btn-sm">Kargo Takip</a>
						<?php                  }?>
												
											<?=$rs->siparisdurumu?>
											</td>
										    <td><a href="<?=base_url()?>uye/siparisdetay/<?=$rs->Id?>" class="btn btn-success btn-sm">Detay</a></td>
										  </tr>
											
											
											
											<?php } 
											?>
											
					         
                                        
                         </tbody>          <!--    </tbody>             -->
                                </table>
								
                            </div>

 
 
  </div>
   </div>
   
  <?php
$this->load->view('_footer');

?>
  
  
