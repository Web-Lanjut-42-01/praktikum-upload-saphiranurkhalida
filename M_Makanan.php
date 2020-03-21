<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Makanan extends CI_Model {
	public function __construct()
	{
	  parent::__construct();
	  //Codeigniter : Write Less Do More
	}
	public function get_makanan()
	{
	  return $this->db->get_where('tb_makanan');
	}
	public function insert_makanan($data){//isi parameter bebas asal sama sama	yang bawa	
	return $this->db->insert('tb_makanan',$data);	
	  //jika dia nambah bakal besar dari 1 //jika sudah masuk ke	return true yang bawah tiadak akan tereksekusi
	}
	public function get_makanan_single($id_makanan) //untuk tampilan edit
  	{
    return $this->db->get_where('tb_makanan',array('id_makanan' => $id_makanan));
  	}
  	


}

/* End of file M_Makanan.php */
/* Location: ./application/models/M_Makanan.php */