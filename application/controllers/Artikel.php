<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

  function __construct(){
    parent::__construct();
    //if ($this->session->userdata('id_user')){}else{redirect(base_url('auth'));};
    $this->load->model('artikel_m');
  }

	public function index()
	{	
		  $data['loop_artikel'] = $this->artikel_m->get()->result();
		  $this->load->view('artikel',$data);
	}
	public function artikelsingle()
	{	
			$id = $this->input->post('id');
		  $data['loop_artikel'] = $this->artikel_m->getById($id)->result();
		  $this->load->view('artikelsingle',$data);
	}

}
