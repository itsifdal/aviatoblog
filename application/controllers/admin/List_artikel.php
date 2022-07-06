<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class List_artikel extends CI_Controller {

  function __construct(){
    parent::__construct();
    //if ($this->session->userdata('id_user')){}else{redirect(base_url('auth'));};
    $this->load->model('artikel_m');
    $this->load->model('kategori_m');
  }

	public function index()
	{	
		  $data['loop_artikel'] = $this->artikel_m->get()->result();
		  $this->load->view('admin/list_artikel',$data);
	}

	public function tambah_artikel()
	{	 
      $data['getKategori'] = $this->kategori_m->getKategori()->result();
		  $this->load->view('admin/tambah_artikel',$data);
	}

	public function tambah(){

        $cover  = $_FILES;
          if($cover=''){}else{
            $config ['upload_path']   = './uploadcover';
            $config ['allowed_types'] = 'jpg|jpeg|png|pdf';

            $this->load->library('upload',$config);
            if(!$this->upload->do_upload('cover')){
              echo "Gambar gagal diupload";
            }else{
              $cover = $this->upload->data('file_name');
            }
        }

        $data = array(
            'judul'    	  => $this->input->post('judul'),
            'kategori'    => $this->input->post('kategori'),
            'konten'     	=> $this->input->post('konten'),
            'cover'       => $cover
        );

        $this->artikel_m->insert('artikel',$data);
        redirect('ADmin/List_artikel');
  	}

    public function update_artikel()
    {
        $id = $this->input->post('id');

        $data['loop_artikel'] = $this->artikel_m->getToUpdate($id)->result();
        $this->load->view('admin/updateartikel',$data);

    }

    public function update_artikel_aksi(){

        $id = $this->input->post('id');

        $data = array(
            'judul'       => $this->input->post('judul'),
            'konten'      => $this->input->post('konten')
        );

        $this->artikel_m->update($id,$data);
        redirect('Admin/List_artikel');
    }

    public function hapus_artikel(){

        $id = $this->input->post('id');
        
        $this->artikel_m->delete($id);
        redirect('Admin/List_artikel');
    }


}
