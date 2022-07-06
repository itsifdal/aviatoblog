<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class artikel_m extends CI_Model {

	function get()
	{
		$this->db->select('*');
		return $this->db->get('artikel');
	}

	public function insert($table,$data)
	{
		$this->db->insert($table,$data);
	}

	public function update($id,$table)
	{
	    $this->db->where('id',$id);
	    $this->db->update('artikel',$table);
	}

	public function delete($id)
	{
	    $this->db->where('id',$id);
	    $this->db->delete('artikel');
	}

	public function getToUpdate($id)
	{
	    $this->db->where('id',$id);
	    return $this->db->get('artikel');
	}

	public function getById($id)
	{
	    $this->db->where('id',$id);
	    return $this->db->get('artikel');
	}

	public function getByKategori($kategori)
	{
	    $this->db->where('kategori',$kategori);
	    return $this->db->get('artikel');
	}

	
}
