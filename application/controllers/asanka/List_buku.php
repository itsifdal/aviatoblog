<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_buku extends CI_Controller {

  function __construct(){
    parent::__construct();
    if ($this->session->userdata('id_user')){}else{redirect(base_url('auth'));};
    $this->load->model('Databuku_m');
  }

	public function index()
	{	
		  $data['loop_buku'] = $this->Databuku_m->get()->result();
		  $this->load->view('asanka/list_buku',$data);
	}

	public function verifikasi($id)
	{	
			$data['loop_buku'] = $this->Databuku_m->getById($id)->result();
		  $this->load->view('asanka/verifikasi_buku',$data);
	}

	public function verifikasi_aksi()
	{	
			$id = $this->input->post('id_buku');

      $data = array(
          'bahasa'    	 => $this->input->post('bahasa'),
          'asal_terbitan'=> $this->input->post('asal_terbitan'),
          'status_buku'  => $this->input->post('status_buku'),
          'status_upload'=> 'Sudah Verifikasi',
      );

			$this->Databuku_m->update($id,$data);
			redirect('asanka/List_buku');
	}

}
