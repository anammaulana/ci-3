<?php


class Katalog extends CI_Controller {
    public function __construct()
    {
         parent::__construct();
         $this->load->model('katalog_model');
		 
            
    }
	   

	public function index()
	{
		$data['title'] = 'Katalog page';

		$data['aplikasi'] = $this->katalog_model->get_aplikasi();
		$data['total_aplikasi'] = $this->katalog_model->jumlah_aplikasi();
		$data['aplikasi_aktif'] = $this->katalog_model->status();
		$data['aplikasi_tidak_aktif'] = $this->katalog_model->status_tidak_aktif();

		$this->load->view('template_frontend/header',$data);
		$this->load->view('katalog/katalog_view', $data);
		$this->load->view('template_frontend/footer');
	}
}
