<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Urunler extends CI_Controller {
    public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				
				$this->load->model('Database_Model');
				$this->load->helper('url');
				if(!$this->session->userdata("admin_session"))
					redirect(base_url().'admin/login');                              // hoca admin/login/ yapmış ///
        }
	
	public function index()
	{
		
		//$query=$this->db->query("SELECT * FROM urunler ORDER BY adi" );
	   // $data["veriler"]=$query->result();
		$data["veriler"]=$this->Database_Model->get_urunler();
		$this->load->view('admin\urunler_liste',$data);
	
		
	
	}
	public function ekle()
	{
		
		
		$this->load->view('admin\urunler_ekle');
		  
		
	
	}
	public function ekle_kaydet()
	{
			$data=array(
			'adi' => $this->input->post('adi'),
			'kodu' => $this->input->post('kodu'),
			'turu' => $this->input->post('turu'),  
			'kategori' => $this->input->post('kategori'),
			'afiyat' => $this->input->post('afiyat'),
			'sfiyat' => $this->input->post('sfiyat'),
			'stok' => $this->input->post('stok'),
		    'description' => $this->input->post('description'),
			'keywords' => $this->input->post('keywords'),
			'aciklama' => $this->input->post('aciklama'),
			'durum' => $this->input->post('durum'),
			'resim' => $this->input->post('resim'),
			);
		$this->db->insert("urunler",$data);  
		$this->session->set_flashdata("mesaj","Ürün kaydı gerçekleştirildi"); 
		redirect(base_url().'admin/urunler');
		
		
			
	}
	public function duzenle($id)     //2.aşama
	{
	    $query=$this->db->query("SELECT * FROM kategoriler" );
		$data["veriler"]=$query->result();
		
		$data["veri"]=$this->Database_Model->get_urun($id);
		$this->load->view('admin\urunler_duzenle_formu',$data);
				
	}
	
	public function guncelle($id)
	{         // Form verilerini aldı hocanın çizdirdiğinde viewden gelen 4.aşama 
			$data=array(
		
		
		'adi' => $this->input->post('adi'),
		'aciklama' => $this->input->post('aciklama'),
		'kategori' => $this->input->post('kategori'),
		'durum' => $this->input->post('durum'),
		'grubu' => $this->input->post('grubu'),
			);
	    
		    $this->Database_Model->update_data("urunler", $data, $id);  
		
		    redirect(base_url().'admin/urunler');
		
	}
	
	public function sil($id)     //2.aşama
	{
	    $this->db->query("DELETE  FROM urunler WHERE Id= $id" );
		redirect(base_url().'admin/urunler');
				
	}
	
	public function resim_yukle($id)     //2.aşama
	{
		$query=$this->db->query("SELECT * FROM urunler WHERE Id= $id" );
		$data["veri"]=$query->result();
		
		
		$data["id"]=$id;
	    $this->load->view('admin\urunler_resim_yukle', $data);
				
	}
	public function resim_kaydet($id)     //2.aşama
	{
		$data["id"]=$id;
		//upload edilecek dosyaya ait ayarlar ve limitler
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 1024;
           // Ayarlar ile kütüphaneyi çağırıyor
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('resim'))       //Yükle ->eğer hata barsa
        {
              $error = $this->upload->display_errors();
			  $this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
              $this->load->view('admin\urunler_resim_yukle', $data);
        }
        else      // hata yoksa 
        {
               $upload_data = $this->upload->data();
			   
			   
			     // Form verilerini aldı hocanın çizdirdiğinde viewden gelen 4.aşama 
			$data=array(
			'resim' => $upload_data["file_name"]
				);
	    $this->load->model('Database_Model');
		$this->Database_Model->update_data("urunler", $data, $id);  
		
		redirect(base_url().'admin/urunler');

               
	    }
				
	}
	
	public function galeri_yukle($id)     //2.aşama
	{
		$query=$this->db->query("SELECT * FROM urunler_resim WHERE urun_id = $id" );
		$data["veriler"]=$query->result();
		
		
		$data["id"]=$id;
	    $this->load->view('admin\urunler_galeri_yukle', $data);
				
	}
	public function galeri_kaydet($id)     //2.aşama
	{
		$data["id"]=$id;
		//upload edilecek dosyaya ait ayarlar ve limitler
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 1024;
           // Ayarlar ile kütüphaneyi çağırıyor
        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('resim'))       //Yükle ->eğer hata barsa
        {
              $error =  $this->upload->display_errors();
			  $this->session->set_flashdata("mesaj","Yüklemede hata oluştu:".$error);
              redirect(base_url().'admin/urunler/galeri_yukle/'.$id);
        }
        else      // hata yoksa 
        {
               
			   
			   
			     // vertabanına kayıt
		    $upload_data = $this->upload->data();
			$data=array(
			'urun_id'=>$id,
			'resim' => $upload_data["file_name"]
				);
				
				$this->db->insert("urunler_resim",$data);  
	     
		$this->session->set_flashdata("mesaj","Resim galeriye yüklendi");
		redirect(base_url().'admin/urunler/galeri_yukle/'.$id);

               
	    }
				
	}
	
	public function galeri_sil($urunid,$resimid)     //2.aşama
	{
	    $this->db->query("DELETE  FROM urunler_resim WHERE Id= $resimid" );
		$this->session->set_flashdata("mesaj","Resim galeriden silindi");
		redirect(base_url().'admin/urunler/galeri_yukle/'.$urunid);
		
				
	}
	
	
}
