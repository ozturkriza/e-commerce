<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uye extends CI_Controller {
     public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				
				$this->load->model('Database_Model');
				$this->load->helper('url');
				
				if(!$this->session->userdata("uye_session"))
					redirect(base_url().'home/login_ol');    
        }
	
	public function index()
	{    $query=$this->db->query("SELECT* FROM ayarlar");
		 $data["veri"]=$query->result();
	
	
	    $query=$this->db->query("SELECT* FROM uyeler WHERE Id=".$this->session->uye_session["id"] );
		$data["uye"]=$query->result();
		
		$data["sayfa"]="Üye Paneli ||";
		$data["menu"]="uye";
		$this->load->view('hesabim',$data);
		
	}
	public function cikis()
	{ 
		$this->session->unset_userdata("uye_session");
		redirect(base_url());
	
	}
	public function hesabim()
	{   
		$query=$this->db->query("SELECT* FROM ayarlar");
		$data["veri"]=$query->result();
	    $data["sayfa"]="Uye Hesabı ||";
		$data["menu"]="uye";
		
		$query=$this->db->query("SELECT * FROM uyeler WHERE Id=".$this->session->uye_session["id"]);
		$data["uye"]=$query->result();
		
		
		$this->load->view('hesabim',$data);
		
	}
	

 public function uye_guncelle()
 	{         // Form verilerini aldı hocanın çizdirdiğinde viewden gelen 4.aşama 
			$data=array(
 		'adsoy' => $this->input->post('adsoy'),
 			'email' => $this->input->post('email'),
           'sehir' => $this->input->post('sehir'),
 			'tel' => $this->input->post('tel'),
 			'password' => $this->input->post('password'),
 	    'adres' => $this->input->post('adres'),
 		);
 		$id=$this->session->uye_session["id"];
 		
		$this->Database_Model->update_data("uyeler", $data, $id);  
		
 		
 		$this->session->set_flashdata("mesaj","Uye Bigileriniz Güncellendi");
	        redirect(base_url().'uye/hesabim');
	}
	public function sepete_ekle()
	{   
	     // $query=$this->db->query("SELECT * FROM uyeler WHERE Id=".$this->session->uye_session["id"]);
		// $data["uye"]=$query->result();
	
	
	
		$data=array(
 		    'urun_id' => $this->input->post('urun_id'),
 			'adet' => $this->input->post('miktar'),
            'musteri_id' => $this->session->uye_session["id"]
 			
 		);
 		$this->db->insert("sepet", $data);
 		
		 
 		$this->session->set_flashdata("mesaj","<p align='center'>Ürün Sepete Eklendi</p>");
	        redirect(base_url().'home/urundetay/'.$this->input->post('urun_id'));
		
	}
	public function sepetim()
	{   
		$query=$this->db->query("SELECT* FROM ayarlar");
		$data["veri"]=$query->result();
	    $data["sayfa"]="Sepetim ||";
		$data["menu"]="sepetim";
		
		$id=$this->session->uye_session["id"];
		$data['veriler'] = $this->Database_Model->sepet_urunler($id);
		
		
		$this->load->view('sepet',$data);
		
	}

public function sepetsil($id)
	{   
		
		$this->db->query("DELETE FROM sepet WHERE Id= $id");
		$this->session->set_flashdata("mesaj","<p align='center'>Ürün Sepetten Silindi</p>");
		redirect(base_url().'uye/sepetim');
		
	}
	
	public function satinal()
	{   
		$query=$this->db->query("SELECT* FROM ayarlar");
		$data["veri"]=$query->result();
	    $data["sayfa"]="Satın Alma ||";
		$data["menu"]="uye";
		
		$data["toplam"]=$this->input->post('toplam');
		$id=$this->session->uye_session["id"];
		
		$query=$this->db->query("SELECT* FROM uyeler WHERE Id=$id");
		$data["uye"]=$query->result();
		
		
		$this->load->view('satinalma',$data);
		
	}
	
	public function siparis_tamamla()
 	{         //kredi kartı bilgilerini al bankaya gönderip olumlu gelirse işleme devam et değilse hata sayfasına gönder
			
			$data=array(
 		    'adsoy' => $this->input->post('adsoy'),
		    'musteri_id' => $this->session->uye_session["id"],
		    'adres' => $this->input->post('adres'),
            'sehir' => $this->input->post('sehir'),
 			'tel' => $this->input->post('tel'),
			'tutar' => $this->input->post('toplam'),
 			'IP'=>$_SERVER['REMOTE_ADDR']
 	    
 		);
		
		$this->db->insert("siparis", $data);
		$siparis_id=$this->db->insert_id();       //insert komutu girilen kaydın ıdsini alıyor     // hoca sipari_sid yazmıs
		
		//sepetteki ürünleri siparis urunlerine ekleme
 		$id=$this->session->uye_session["id"];
		
		//sepetteki üsünleri asiparis ürünler tablosuna aktarma
		$veriler =$this->Database_Model->sepet_urunler($id);
		foreach ($veriler as $rs)
		{
			$data=array(
 		    'adi' => $rs->urunadi,
		    'fiyat' => $rs->satfiyat,
		    'musteri_id' => $id,
            'urun_id' => $rs->urun_id,
 			'siparis_id' => $siparis_id,
			'adet' => $rs->adet,
			'tutar' => $rs->adet*$rs->satfiyat
            	);
				$this->db->insert("siparis_urunler",$data);
				//Eklenen Ürün adedi urunler tablosundaki stoktan düşürülmeli  
			
		}
 		//müşteri sepetni bosalt
		$this->db->query("DELETE FROM sepet WHERE musteri_id=$id");
		
		
		 
		
 		
 		
	        redirect(base_url().'uye/islemson');
	}
	
	public function islemson()
	{   
		$query=$this->db->query("SELECT* FROM ayarlar");
		$data["veri"]=$query->result();
	    $data["sayfa"]="İşlem Tamamlandı ||";
		$data["menu"]="satinalma";
		
		// mail gönderme sipariş tamam
		
		
		$this->load->view('islemson',$data);
		
	}
	
	public function siparisler()
	{   
		$query=$this->db->query("SELECT* FROM ayarlar");
		$data["veri"]=$query->result();
	    $data["sayfa"]="Siparişlerim ||";
		$data["menu"]="uye";
		
		$query=$this->db->query("SELECT* FROM siparis WHERE musteri_id=".$this->session->uye_session["id"]);
		$data["veriler"]=$query->result();
		
		
		$this->load->view('siparislerim',$data);
		
	}
	
	public function siparisdetay($siparis_id)
	{  
	    $query=$this->db->query("SELECT* FROM ayarlar");
		$data["veri"]=$query->result();
	    $data["sayfa"]="Sipariş Detayı ||";
		$data["menu"]="uye";
		
		$id=$this->session->uye_session["id"];
		$query=$this->db->query("SELECT* FROM siparis_urunler WHERE siparis_id=$siparis_id");
		$data["veriler"]=$query->result();
		$this->load->view('siparis_detay',$data);
		
		
		
		
		
			
	
	}
	
	public function siparis_iptal($id)
	{   
		
		$this->db->query("DELETE FROM siparis WHERE Id= $id");
		$this->session->set_flashdata("mesaj","<p align='center'>Sipariş iptal edilmek üzere incelenecektir</p>");
		redirect(base_url().'uye/siparisler');
		
	}
	
	
	
	
	
}
