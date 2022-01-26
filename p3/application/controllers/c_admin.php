<?php 
defined('BASEPATH') OR exit ('No direct script access allowed');

class c_admin extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('m_admin');
		if($this->session->userdata('masuk')!=TRUE){
			$this->session->set_flashdata('pesan','Anda Tidak Berhak Masuk Aplikasi');
			redirect('c_inventaris');
		}
		//cek session user
	}
	public function index()
	{	
		$data['petugas']=$this->m_admin->ambil_petugas();
		$this->load->view('_admin/v_petugas',$data);
		//index pertamakali admin
	}
	public function tampil_petugas()
	{
		$data['petugas']=$this->m_admin->ambil_petugas();
		$this->load->view('_admin/v_petugas',$data);
		//Menampilkan data petugas

	}
	public function validasi_petugas()
	{	$cek=$this->m_admin->ambil_username();
		if(empty($cek)){
			$this->m_admin->tambah_petugas();
			redirect('c_admin');
		}
		else{
			redirect(site_url('c_admin/tampil_tambah_petugas'));
		}
		//Mengecek apakah username petugas sudah ada atau belum, jika sudah ada 
		//tidak boleh menggunakan username yang sama
	}
	public function tampil_tambah_petugas()
	{
		$data['level']=$this->m_admin->ambil_level();
		$this->load->view('_admin/v_tambah_petugas',$data);
		//Menampilkan form tambah data petugas
	}
	public function edit_petugas()
	{
		$this->m_admin->edit_petugas();
		redirect('c_admin');
		//Mengubah data petugas kemudian memunculkan list petugas
	}
	public function hapus_petugas()
	{
		$this->m_admin->hapus_petugas();
		redirect('c_admin');
		//Menghapus data petugas kemudian memunculkan list petugas
	}
	public function tampil_pegawai()
	{
		$data['pegawai']=$this->m_admin->ambil_pegawai();
		$this->load->view('_admin/v_pegawai',$data);
		//Menampilkan data pegawai
	}
	public function tampil_tambah_pegawai()
	{
		$this->load->view('_admin/v_tambah_pegawai');
		//Menampilkan form tambah_pegawai
	}
	public function validasi_pegawai()
	{	$cek=$this->m_admin->ambil_username_pgw();
		if(empty($cek)){
			$this->m_admin->tambah_pegawai();
			$data['pegawai']=$this->m_admin->ambil_pegawai();
			$this->load->view('_admin/v_pegawai',$data);
		}
		else{
			redirect(site_url('c_admin/tampil_tambah_pegawai'));
		}
		//Mengecek apakah username pegawai sudah ada atau belum, jika sudah ada 
		//tidak boleh menggunakan username yang sama
	}
	public function edit_pegawai()
	{
		$this->m_admin->edit_pegawai();
		$data['pegawai']=$this->m_admin->ambil_pegawai();
		$this->load->view('_admin/v_pegawai',$data);
		//Merubah data pegawai
	}
	public function hapus_pegawai()
	{
		$this->m_admin->hapus_pegawai();
		$data['pegawai']=$this->m_admin->ambil_pegawai();
		$this->load->view('_admin/v_pegawai',$data);
		//Hapus data pegawai
	}
	public function tampil_inventaris()
	{
		$data['inventaris']=$this->m_admin->ambil_inventaris();
		$this->load->view('_admin/v_inventaris',$data);
		//Menampilkan data inventaris barang
	}
	public function tampil_tambah_inventaris()
	{	
		$data['jenis']=$this->m_admin->ambil_jenis();
		$data['ruang']=$this->m_admin->ambil_ruang();
		$data['petugas']=$this->m_admin->ambil_petugas();
		$this->load->view('_admin/v_tambah_inventaris',$data);
		//Menampilkan form tambah inventaris
	}
	public function tampil_edit_inventaris()
	{
		$data['jenis']=$this->m_admin->ambil_jenis();
		$data['ruang']=$this->m_admin->ambil_ruang();
		$data['petugas']=$this->m_admin->ambil_petugas();
		$data['data']=$this->m_admin->ambil_inventaris_edit();
		$this->load->view('_admin/v_edit_inventaris',$data);
		//Menampilkan form tambah inventaris
	}
	public function tambah_inventaris()
	{
		$this->m_admin->tambah_inventaris();
		$data['inventaris']=$this->m_admin->ambil_inventaris();
		$this->load->view('_admin/v_inventaris',$data);
		//Menambahkan data inventaris kemudian memuat list inventaris
	}
	public function edit_inventaris()
	{
		$this->m_admin->edit_inventaris();
		$data['inventaris']=$this->m_admin->ambil_inventaris();
		$this->load->view('_admin/v_inventaris',$data);
		//Merubah data inventaris kemudian memuat list inventaris
	}
	public function hapus_inventaris()
	{
		$this->m_admin->hapus_inventaris();
		redirect(site_url('c_admin/tampil_inventaris'));
		//Menghapus data inventaris
	}
	public function tampil_peminjaman()
	{
		$data['peminjaman']=$this->m_admin->ambil_peminjaman();
		$this->load->view('_admin/v_peminjaman',$data);
		//Menampilkan data peminjaman barang
	}
	public function tampil_tambah_peminjaman()
	{
		$data['pegawai']=$this->m_admin->ambil_pegawai();
		$data['barang']=$this->m_admin->ambil_inventaris();
		$this->load->view('_admin/v_tambah_peminjaman',$data);
		//Memunculkan form peminjaman
	}
	public function tambah_peminjaman()
	{
		$id=uniqid();
		$this->m_admin->tambah_peminjaman($id);
		redirect(site_url('c_admin/tampil_peminjaman'));
		//Melakukan penambahan data
	}
	public function mengedit_peminjaman()
	{
		$this->m_admin->mengedit_peminjaman();
		redirect(site_url('c_admin/tampil_peminjaman'));
		//mengedit peminjaman
	}
	public function hapus_peminjaman()
	{
		$this->m_admin->hapus_peminjaman();
		redirect(site_url('c_admin/tampil_peminjaman'));
		//menghapus peminjaman
	}
	public function detail_peminjaman()
	{
		$data['detail_pinjam']=$this->m_admin->detail_peminjaman();
		$this->load->view('_admin/v_detail_pinjam',$data);
		//Menampilkan detail dari peminjaman
	}
	public function detail_peminjaman_pengembalian()
	{
		$data['detail_pinjam']=$this->m_admin->detail_peminjaman();
		$this->load->view('_admin/v_detail_pinjam_pengembalian',$data);
		//Menampilkan detail dari peminjaman untuk menu pengembalian
	}
	public function tampil_tambah_detail_pinjam()
	{
		$data['inventaris']=$this->m_admin->ambil_inventaris();
		$this->load->view('_admin/v_tambah_detail_pinjam',$data);
		//Menampilkan form tambah detail peminjaman
	}
	public function tambah_detail_pinjam()
	{
		$id=$this->input->get('id');
		$this->m_admin->tambah_detail_pinjam();
		$data['detail_pinjam']=$this->m_admin->detail_peminjaman($id);
		$this->load->view('_admin/v_detail_pinjam',$data);
		//Menambah barang yang dipinjam
	}
	public function hapus_detail_pinjam()
	{
		$this->m_admin->hapus_detail_pinjam();
		redirect(site_url('c_admin/tampil_peminjaman'));
		//menghapus detail pinjam
	}
	public function pengembalian()
	{
		$this->m_admin->pengembalian();
		redirect(site_url('c_admin/tampil_peminjaman'));
		//menampilkan list peminjaman
	}
	public function tampil_pengembalian()
	{
		$data['pengembalian']=$this->m_admin->ambil_pengembalian();
		$this->load->view('_admin/v_pengembalian',$data);
		//Menampilkan data peminjaman barang
	}
	public function tampil_laporan()
	{
		$data['laporan']=$this->m_admin->ambil_laporan();
		$this->load->view('_admin/v_laporan',$data);
		//Menampilkan data peminjaman barang
	}
	public function cetak_laporan()
	{
		ob_start();
		$data['laporan'] = $this->m_admin->ambil_laporan();
		$this->load->view('_admin/cetak_laporan',$data);
		$html = ob_get_contents();
				ob_end_clean();
		require_once('asset/plugins/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('p','A4','en');
		$pdf->WriteHTML($html);
		$pdf->Output('Laporan Peminjaman Barang.pdf');
		//Cetak laporan / Merubah halaman html kedalam pdf
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('c_inventaris');
		//log out aplikasi
	}
}