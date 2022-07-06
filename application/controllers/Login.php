<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

  function __construct()
  {
      parent::__construct();
      $this->load->model('Auth_m');
  }

  public function index(){
      $this->load->view('login');
  }

  function proses_login()
  {

      $u    =   $this->input->post('username');
      $p    =   md5($this->input->post('password'));
      $cek  =   $this->Auth_m->cek_login($u,$p);

      if($cek->num_rows() > 0)
      {
        foreach($cek->result() as $ck):
          $username = $ck->username;
          $nama     = $ck->nama;
          $id       = $ck->id;
        endforeach;
        $data = array(
                'username'  => $username,
                'id'        => $id,
                'nama'      => $nama);

        $this->session->set_userdata($data);

        //cek status user
        if($this->session->userdata('id'))
        {
          redirect(base_url().'admin/List_artikel');
        }
        else{
          redirect(base_url().'Login');
        }

      }else

      {
        $this->session->set_flashdata('notif','
                    <div class="alert alert-danger alert-common alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <i class="tf-ion-close-circled"></i><span>Username atau password anda salah.</span> Silahkan coba lagi! 
                    </div>');
        redirect('login');
      }


  }

  function logout(){
      $this->session->sess_destroy();
      redirect(base_url().'auth');
  }

  public function reset_password(){
      $this->load->view('admin/resetpassword_v');
  }



    

}
