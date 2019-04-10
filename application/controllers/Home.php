<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
     public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				
				$this->load->model('Database_Model');
				$this->load->helper('url');
				
        }
	
	public function index()
	{  $query=$this->db->query("SELECT COUNT(Id) AS say FROM sepet");
		 $data["sepet"]=$query->result();
 

	     $query=$this->db->query("SELECT* FROM kategoriler ORDER BY adi");
		 $data["kategoriler"]=$query->result();
		 
		 $query=$this->db->query("SELECT* FROM urunler WHERE grubu='kampanya'");
		 $data["kampanya"]=$query->result();
		 
		$query=$this->db->query("SELECT* FROM urunler ORDER BY Id DESC LIMIT 9");    //
		$data["yeni"]=$query->result();                                               //
		 
		$query=$this->db->query("SELECT* FROM urunler ORDER BY RAND() LIMIT 4");        //
		$data["random"]=$query->result();
	 
		$query=$this->db->query("SELECT* FROM yorumlar");
		 $data["yor"]=$query->result();
	
	    $query=$this->db->query("SELECT* FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Anasayfa ||";
		$data["menu"]="anasayfa";
		
		$this->load->view('_header',$data);
		$this->load->view('_slider');
		$this->load->view('_sidebar');
		$this->load->view('_content');
		$this->load->view('_footer');
	}
		public function hakkimizda()
	{  
        $query=$this->db->query("SELECT* FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();

	    $query=$this->db->query("SELECT* FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Hakkımızda ||";
		$data["menu"]="hakkimizda";
		$this->load->view('_header',$data);
		$this->load->view('_sidebar');
		$this->load->view('hakkimizda');
		$this->load->view('_footer');
	}
	public function iletisim()
	{   
		$query=$this->db->query("SELECT* FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();
	
		$query=$this->db->query("SELECT* FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="İletişim ||";
		$data["menu"]="iletisim";
		$this->load->view('iletisim',$data);
		
	}
	
public function kategoriler(){

        $this->load->model('model_kategoriler');
	$data = $this->model_kategoriler->get_kategoriler();

	print_r($data);
    }	
	
	public function bize_yazin()
	{   
		$query=$this->db->query("SELECT* FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();
	
		$query=$this->db->query("SELECT* FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Bize_yazin ||";
		$data["menu"]="bize_yazin";
		$this->load->view('bize_yazin',$data);
		
	}
	public function mesaj_kaydet()
	{
			$data=array(
			'adsoy' => $this->input->post('adsoy'),
			'email' => $this->input->post('email'),
			'tel' => $this->input->post('tel'),
			'mesaj' => $this->input->post('mesaj'),
			'ip'=>$_SERVER['REMOTE_ADDR']
		    
		);
		$this->db->insert("mesajlar",$data);  
		$this->session->set_flashdata("mesaj","<p align='center'>Mesajınız Başarılı Şekilde İletilmiştir<br>En Kısa Sürede Sizinle İletişime Geçilecektir </p>"); 
		redirect(base_url().'home/bize_yazin');
		
		
			
	}
	
	
	public function login_ol()
	{   
		//$query=$this->db->query("SELECT* FROM kategoriler ORDER BY adi");
		//$data["kategoriler"]=$query->result();
	
		$query=$this->db->query("SELECT* FROM ayarlar");
		$data["veri"]=$query->result();
	    $data["sayfa"]="Üye Giriş ||";
		$data["menu"]="uye";                         //musteiler uye
		$this->load->view('login_ol',$data);
		
	}
	
	public function login()
	{   
		$email=$this->input->post("eposta");
		$password=$this->input->post("password");
		
		$email=$this->security->xss_clean($email);
		$password=$this->security->xss_clean($password);
		
		
		$this->load->model('Database_Model');
		$result= $this->Database_Model->login('uyeler',$email,$password);        
		
		if($result)
		 	  {    // Kullanıcı varsa bilgileri diziye alıyor 
		             $sess_array = array(
					 
					                   'id'=>$result[0]->Id,
				                  //     'yetki'=>$result[0]->yetki,
									   'email'=>$result[0]->email,
									   'adsoy'=>$result[0]->adsoy,
								   //    'resim'=>$result[0]->resim,
									   );
									//  print_r($sess_array);
									//  echo "Login oldu";
									//  exit();
									   // session değişkenine atama 
									   $this->session->set_userdata("uye_session",$sess_array);
									   redirect(base_url());
		 	  }       
		 	  else
		 	  {
				   $this->session->set_flashdata("mesaj","Hatalı kullanıcı adı yada şifre!!");
		  		   redirect(base_url()."home/login_ol");
				  
		 	  }
	}
	
	
		public function urundetay($id)
	{   $query=$this->db->query("SELECT* FROM urunler ORDER BY RAND() LIMIT 4");        //
		$data["random"]=$query->result();


         $query=$this->db->query("SELECT* FROM yorumlar  ORDER BY RAND() LIMIT 2");
		 $data["yor"]=$query->result();		
			
		$query=$this->db->query("SELECT* FROM kategoriler ORDER BY adi");
		$data["kategoriler"]=$query->result();
	    $data["menu"]="urun";
		$data["sayfa"]=null;
		
		$data["veri"]=$this->Database_Model->get_urun($id);
		
		$query=$this->db->query("SELECT* FROM urunler_resim WHERE urun_id=$id");
		$data["resimler"]=$query->result();
		$this->load->view('urun_detay',$data);
	}
	
	
	
	public function uye_ekle()
	{
			$data=array(
			'adsoy' => $this->input->post('adsoy'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),  
			'tel' => $this->input->post('tel'),
			'durum' => $this->input->post('durum'),
			'adres' => $this->input->post('adres'),
			
			
		    
			);
			$this->db->insert("uyeler",$data);  
		$this->session->set_flashdata("mesaj","Üye kaydı gerçekleştirildi"); 
		redirect(base_url().'home/login');
		
		
			
	}
	
	
	public function yorum_kaydet()
	{
		
		
			$data=array(
			'isim' => $this->input->post('isim'),
			'email' => $this->input->post('email'),
			'yorum' => $this->input->post('yorum'),
			
			
		    
			);
		$this->db->insert("yorumlar",$data);  
		//$this->session->set_flashdata("mesaj","<p align='center'>Mesajınız Başarılı Şekilde İletilmiştir<br>En Kısa Sürede Sizinle İletişime Geçilecektir </p>"); 
		redirect(base_url().'home');
		
		
			
	}
	
	
	public function siparisler($durum)
	{  
				
		$query=$this->db->query("SELECT* FROM siparis WHERE siparisdurumu='$durum'");
		$data["veriler"]=$query->result();
	    
		
		
		$this->load->view('siparisler_listesi',$data);
	}
	
	
	public function kampanyalar()
	{   $query=$this->db->query("SELECT* FROM urunler ORDER BY Id DESC LIMIT 4");    //
		$data["yeni"]=$query->result();                                               //
		 
		$query=$this->db->query("SELECT* FROM urunler ORDER BY RAND() LIMIT 6");        //
		$data["random"]=$query->result();
	 
		$query=$this->db->query("SELECT* FROM yorumlar");
		 $data["yor"]=$query->result();
	
	    $query=$this->db->query("SELECT* FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"]="Anasayfa ||";
		$data["menu"]="anasayfa";
		
		$this->load->view('kampanyalar',$data);
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
}
