<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_m extends CI_Model {

	function getKategori()
	{
		$this->db->select('*');
		return $this->db->get('kategori');
	}
}

