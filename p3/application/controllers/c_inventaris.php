<?php 
defined('BASEPATH') Or exit ('No direct script access allowed');

class c_inventaris extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('m_inventaris');
	}
	public function index(){
		$this->load->view('v_login');
	}
	public function ceklogin()
	{
		if($this->m_inventaris->validasi()){
		$cekpetugas=$this->m_inventaris->cekpetugas();
			if($cekpetugas>0){
				$this->session->set_userdata('masuk',TRUE);
				if($cekpetugas->id_level==1){
					$this->session->set_userdata('id',$cekpetugas->id_petugas);
					$this->session->set_userdata('nama',$cekpetugas->nama_petugas);
					$this->session->set_userdata('level','Admin');
					redirect('c_admin');
				}
				else{
					$this->session->set_userdata('id',$cekpetugas->id_petugas);
					$this->session->set_userdata('nama',$cekpetugas->nama_petugas);
					$this->session->set_userdata('level','Operator');
					redirect('c_operator');
				}
			}
			elseif($cekpegawai=$this->m_inventaris->cekpegawai()){
				if($cekpegawai>0){
					$this->session->set_userdata('masuk',TRUE);
					if($cekpegawai->level==3){
						$this->session->set_userdata('id',$cekpegawai->id_pegawai);
						$this->session->set_userdata('nama',$cekpegawai->nama_pegawai);
						$this->session->set_userdata('level','Pegawai');
						redirect('c_pegawai');
					}
				}
			}
			else{
				$this->load->view('v_login');
			}
		}
		else{
			$this->load->view('v_login');
		}
	}
}