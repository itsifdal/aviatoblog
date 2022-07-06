<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_m extends CI_Model
{

  function cek_login($u,$p)
  {
    $this->db->where('username',$u);
    $this->db->where('password',$p);
    return $this->db->get('user');
  }





}