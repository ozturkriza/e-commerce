<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Musteriler extends CI_Controller {
    public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->helper('url');
				if(!$this->session->userdata("admin_session"))
					redirect(base_url().'admin/login');                              // hoca admin/login/ yapmış ///
        }
	
	public function index()
	{
		
		$query=$this->db->query("SELECT * FROM musteriler ORDER BY adsoy" );
		$data["veriler"]=$query->result();
		
		$this->load->view('admin\musteriler_liste',$data);
		
		
		
	
	}
	public function ekle()
	{
		
		
		$this->load->view('admin\musteriler_ekle');
		
		
	
	}
	public function ekle_kaydet()
	{
			$data=array(
			'adsoy' => $this->input->post('adsoy'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),  
			'tel' => $this->input->post('tel'),
			'sehir' => $this->input->post('sehir'),
			'adres' => $this->input->post('adres'),
			'yetki' => $this->input->post('yetki'),
		    'durum' => $this->input->post('durum'),
			
		    
			);
		$this->db->insert("musteriler",$data);  
		$this->session->set_flashdata("mesaj","Üye kaydı gerçekleştirildi"); 
		redirect(base_url().'admin/musteriler');
		
		
			
	}
	public function duzenle($id)     //2.aşama
	{
	    $query=$this->db->query("SELECT * FROM musteriler WHERE Id= $id" );
		$data["veri"]=$query->result();
		$this->load->view('admin\musteriler_duzenle_formu',$data);
				
	}
	
	public function guncelle($id)
	{         // Form verilerini aldı hocanın çizdirdiğinde viewden gelen 4.aşama 
			$data=array(
			'adsoy' => $this->input->post('adsoy'),
			'email' => $this->input->post('email'),
			'sehir' => $this->input->post('sehir'),
			'tel' => $this->input->post('tel'),
			'durum' => $this->input->post('durum'),
			'yetki' => $this->input->post('yetki'),
			'password' => $this->input->post('password'),
		    'adres' => $this->input->post('adres'),
			);
	    $this->load->model('Database_Model');
		$this->Database_Model->update_data("musteriler", $data, $id);  
		
		redirect(base_url().'admin/musteriler');
		
	}
	
	public function sil($id)     //2.aşama
	{
	    $this->db->query("DELETE  FROM musteriler WHERE Id= $id" );
		redirect(base_url().'admin/musteriler');
				
	}
	
	
	
	
	
	
	
}
