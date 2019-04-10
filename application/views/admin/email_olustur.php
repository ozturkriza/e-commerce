
<?php
		$this->load->view('admin\_header');
		$this->load->view('admin\_sidebar');
?>
<div style="height: 900px; overflow: scroll; width: auto;">
<div class="inbox">
    	  <h2>    </h2>
    	 <div class="col-md-4 compose">   	 	
    	 	<div class="mail-profile">
    	 		<div class="mail-pic">
    	 			<a href="#"><img src="images/b3.png" alt=""></a>
    	 		</div>
    	 		<div class="mailer-name"> 	
				
				      <span class="prfil-img"><img src="<?=base_url()?>assets/admin/images/Ekran Alıntısı.PNG" alt=""> </span> 
    	 				<h5><a href="#"><a href=""><p><?=$this->session->admin_session["adsoy"]?></p></a></a></h5>  	 				
    	 			     <h6><a href="mailto:info@example.com"><?=$this->session->admin_session["email"]?></a></h6>   
    	 		</div>
    	 	    <div class="clearfix"> </div>
    	 	</div>
    	 	<div class="compose-bottom">
    	 		<ul>
    	 			<li><a class="hilate" href="<?=base_url()?>admin/home/emailler"><i class="fa fa-inbox"> </i>Gelen Kutusu</a></li>
    	 			<li><a href="#"><i class="fa fa-envelope-o"> </i>Gönderilenler</a></li>
    	 			
    	 		</ul>
    	 	</div>
    	 </div>   	 
    	 	<div class="col-md-8 compose-right">
					<div class="inbox-details-default">
						<div class="inbox-details-heading">
							Yeni Mesaj Oluştur 
						</div>
						<div class="inbox-details-body">
							<div class="alert alert-info">
								Lütfen yeni bir mesaj göndermek için ayrıntıları doldurun
							</div>
							
							<form class="com-mail" action="https://formspree.io/oztrkriza@hotmail.com" method="post">
								<input type="text" value="Email :" name="_replyto" id="_replyto" required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'To';}">
								
								
								<textarea rows="6" value="Message :" name="contact_content"  required onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Mesaj </textarea>
								<div class="form-group">
									<div class="btn btn-default btn-file">
										<i class="fa fa-paperclip"> </i> Dosya Ekle
										<input type="file" name="attachment">
									</div>
								</div>
								<input  type="submit" value="Gönder"> 
							</form>
							
						</div>
					</div>
				</div>
    	
          <div class="clearfix"> </div>     
   </div>

<?php
$this->load->view('admin\_footer');
?>

</div>

<!-- Ckeditor -->
     <script src="<?=base_url()?>as/plugins/ckeditor/ckeditor.js"></script>                
     <script src="<?=base_url()?>as/js/pages/forms/editors.js"></script>      