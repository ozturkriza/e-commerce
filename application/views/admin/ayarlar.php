<?php
		$this->load->view('admin\_header');
		$this->load->view('admin\_sidebar');
?>
      <!-- Ckeditor -->
     <script src="<?=base_url()?>as/plugins/ckeditor/ckeditor.js"></script>                
     <script src="<?=base_url()?>as/js/pages/forms/editors.js"></script>      
	 <div style="height: 900px; overflow: scroll; width: auto;">

<div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#genel" data-toggle="tab" aria-expanded="true">Genel</a></li>
              <li class=""><a href="#email" data-toggle="tab" aria-expanded="false">Email</a></li>
              <li class=""><a href="#sosyal" data-toggle="tab" aria-expanded="false">Sosyal</a></li>
			  <li class=""><a href="#hakkımızda" data-toggle="tab" aria-expanded="false">Hakkkımızda</a></li>
              <li class=""><a href="#iletişim" data-toggle="tab" aria-expanded="false">İletişim</a></li>
            </ul>
			
			<form method="post" action="<?=base_url()?>admin/home/ayarlar_guncelle/<?=$veri[0]->Id?>" class="form-horizontal">
			
             <div class="tab-content">
              <div class="tab-pane active" id="genel">
                  
				 <h4> Genel Ayarlar </h4>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Adı</label>

                    <div class="col-sm-10">
                      <input type="text" name="adi" value="<?=$veri[0]->adi?>" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Description</label>

                    <div class="col-sm-10">
                      <input type="text" name="description" value="<?=$veri[0]->description?>" class="form-control" id="inputEmail" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Keywords</label>

                    <div class="col-sm-10">
                      <input type="text" name="keywords" value="<?=$veri[0]->keywords?>" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Adres</label>

                    <div class="col-sm-10">
                      <input type="text" name="adres" value="<?=$veri[0]->adres?>" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Telefon</label>

                    <div class="col-sm-10">
                      <input type="text" name="tel" value="<?=$veri[0]->tel?>" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
				  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Şehir</label>

                    <div class="col-sm-10">
                      <input type="text" name="sehir" value="<?=$veri[0]->sehir?>" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  
                 
                

                 
                
                <!-- /.post -->
              </div>
			  
              <!-- /.tab-pane -->
              <div class="tab-pane" id="email">
               <h4> Email Ayarları </h4>
			   
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Smtp Server</label>

                    <div class="col-sm-10">
					 <input type="text" name="smtpserver" value="<?=$veri[0]->smtpserver?>" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Smtp Email</label>

                    <div class="col-sm-10">
                      <input type="text" name="smtpemail" value="<?=$veri[0]->smtpemail?>" class="form-control" id="inputEmail" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Port</label>

                    <div class="col-sm-10">
                      <input type="text" name="smtpport" value="<?=$veri[0]->smtpport?>" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Şifre</label>

                    <div class="col-sm-10">
                      <input type="password" name="password" value="<?=$veri[0]->password?>" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="sosyal">
               <h4> Sosyal Medya Ayarları </h4>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Facebook</label>

                    <div class="col-sm-10">
                      <input type="text" name="facebook" value="<?=$veri[0]->facebook?>" class="form-control" id="inputName" placeholder="Facebook">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Instagram</label>

                    <div class="col-sm-10">
                      <input type="text" name="instagram" value="<?=$veri[0]->instagram?>" class="form-control" id="inputEmail" placeholder="Instagram">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Twitter</label>

                    <div class="col-sm-10">
                      <input type="text" name="twitter" value="<?=$veri[0]->twitter?>" class="form-control" id="inputName" placeholder="Twitter">
                    </div>
                  </div>

                  
                
              </div>
              <!-- /.tab-pane -->
			  <div class="tab-pane" id="hakkımızda">
			  <h4>Hakkımızda Bilgileri</h4>
                
                  <div class="form-group">
                    <div class="col-sm-20">
                      <textarea name="editor1" id="editor1"  rows="30" cols="140" class="ckeditor"><?=$veri[0]->hakkimizda?>
					  </textarea>
					  <script>
                         // Ckeditor ü  ön tanımlı  ayarları  kullanarak <textarea id="editor1"> nesnesi üzerinde aktif  ediyoruz
                        CKEDITOR.replace( 'editor1' );
                      </script>
					 </div>
                  </div>
              </div>
          
		      <div class="tab-pane" id="iletişim">
			  <h4>İletişim Sayfası Bilgileri</h4>
               
                  <div class="form-group">
                    <div class="col-sm-20">
                      <textarea name="editor2" id="editor2"  rows="15" "cols=139" class="ckeditor"><?=$veri[0]->iletisim?>
					  </textarea> 
					  <script>
                         // Ckeditor ü  ön tanımlı  ayarları  kullanarak <textarea id="editor1"> nesnesi üzerinde aktif  ediyoruz
                        CKEDITOR.replace( 'editor2' );
                      </script>
                    </div>
                  </div>
              
              </div>

		     </div>
			 <div class="row">
			      <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Güncelle</button>
                    </div>
                  </div>
			 </div>
			</form>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
  
  <?php
$this->load->view('admin\_footer');
?> 
</div>
    
	  
	 