<?php
defined('BASEPATH') Or exit('No direct script access allowed');

class m_inventaris extends CI_Model{
	public function validasi(){
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run()){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
	public function cekpetugas(){
		$user = htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
		$pass = md5(htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES));

		$this->db->where('username',$user);
		$this->db->where('password',$pass);
		$hasil = $this->db->get('tb_petugas');

		return $hasil->row();
	}
	public function cekpegawai(){
		$user = htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
		$pass = md5(htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES));

		$this->db->where('username_pgw',$user);
		$this->db->where('password_pgw',$pass);
		$hasil = $this->db->get('tb_pegawai');

		return $hasil->row();
	}

}