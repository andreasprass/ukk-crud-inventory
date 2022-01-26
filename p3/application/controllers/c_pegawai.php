<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class c_pegawai extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('m_pegawai');
		if($this->session->userdata('masuk')!=TRUE){
			$this->session->set_flashdata('pesan','Anda Tidak Berhak Masuk Aplikasi');
			redirect('c_inventaris');
		}
		//cek session user
	}
	public function index()
	{	
		$data['peminjaman']=$this->m_pegawai->ambil_peminjaman();
		$this->load->view('_pegawai/v_peminjaman',$data);
	}
	public function tampil_peminjaman()
	{
		$data['peminjaman']=$this->m_pegawai->ambil_peminjaman();
		$this->load->view('_pegawai/v_peminjaman',$data);
		//Menampilkan data peminjaman barang
	}
	public function tampil_tambah_peminjaman()
	{
		$data['pegawai']=$this->m_pegawai->ambil_pegawai();
		$data['barang']=$this->m_pegawai->ambil_inventaris();
		$this->load->view('_pegawai/v_tambah_peminjaman',$data);
		//Memunculkan form peminjaman
	}
	public function tambah_peminjaman()
	{
		$id=uniqid();
		$this->m_pegawai->tambah_peminjaman($id);
		redirect(site_url('c_pegawai/tampil_peminjaman'));
		//Melakukan penambahan data
	}
	public function edit_peminjaman()
	{
		$data['pegawai']=$this->m_pegawai->ambil_pegawai();
		$data['data']=$this->m_pegawai->ambil_edit_peminjaman();
		$this->load->view('_pegawai/v_edit_peminjaman',$data);
	}
	public function mengedit_peminjaman()
	{
		$this->m_pegawai->mengedit_peminjaman();
		redirect(site_url('c_pegawai/tampil_peminjaman'));
	}
	public function hapus_peminjaman()
	{
		$this->m_pegawai->hapus_peminjaman();
		redirect(site_url('c_pegawai/tampil_peminjaman'));
	}
	public function detail_peminjaman()
	{
		$data['detail_pinjam']=$this->m_pegawai->detail_peminjaman();
		$this->load->view('_pegawai/v_detail_pinjam',$data);
		//Menampilkan detail dari peminjaman
	}
	public function detail_peminjaman_pengembalian()
	{
		$data['detail_pinjam']=$this->m_pegawai->detail_peminjaman();
		$this->load->view('_pegawai/v_detail_pinjam_pengembalian',$data);
		//Menampilkan detail dari peminjaman untuk menu pengembalian
	}
	public function tampil_tambah_detail_pinjam()
	{
		$data['inventaris']=$this->m_pegawai->ambil_inventaris();
		$this->load->view('_pegawai/v_tambah_detail_pinjam',$data);
		//Menampilkan form tambah detail peminjaman
	}
	public function tambah_detail_pinjam()
	{
		$id=$this->input->get('id');
		$this->m_pegawai->tambah_detail_pinjam();
		$data['detail_pinjam']=$this->m_pegawai->detail_peminjaman($id);
		$this->load->view('_pegawai/v_detail_pinjam',$data);
		//Menambah barang yang dipinjam
	}
	public function hapus_detail_pinjam()
	{
		$this->m_pegawai->hapus_detail_pinjam();
		redirect(site_url('c_pegawai/tampil_peminjaman'));
	}
	public function pengembalian()
	{
		$this->m_pegawai->pengembalian();
		redirect(site_url('c_pegawai/tampil_peminjaman'));
		//menampilkan list peminjaman
	}
	public function tampil_pengembalian()
	{
		$data['pengembalian']=$this->m_pegawai->ambil_pengembalian();
		$this->load->view('_pegawai/v_pengembalian',$data);
		//Menampilkan data peminjaman barang
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('c_inventaris');
		//log out aplikasi
	}
}