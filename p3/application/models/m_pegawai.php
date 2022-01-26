<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class m_pegawai extends CI_model{
	public function ambil_peminjaman()
	{
		$index=$this->session->userdata('id');
		$this->db->select('*');
		$this->db->from('tb_peminjaman');
		$this->db->join('tb_pegawai','tb_peminjaman.id_pegawai=tb_pegawai.id_pegawai');
		$this->db->where('tb_pegawai.id_pegawai',$index);
		$this->db->where('tb_peminjaman.status_peminjaman',0);
		$query = $this->db->get();
		return $query->result();
		//Mengambil data peminjaman dan data pegawai dengan join
		//dengan status_peminjaman yang belum dikembalikan
	}
	public function ambil_jenis()
	{
		$this->db->select('*');
		$this->db->from('tb_jenis');
		$query = $this->db->get();
		return $query->result();
		//Mengambil data dari tabel jenis
	}
	public function ambil_ruang()
	{
		$this->db->select('*');
		$this->db->from('tb_ruang');
		$query = $this->db->get();
		return $query->result();
		//Mengambil data dari tabel ruang
	}
	public function ambil_inventaris()
	{
		$this->db->select('*');
		$this->db->from('tb_inventaris');
		$this->db->join('tb_ruang','tb_inventaris.id_ruang=tb_ruang.id_ruang');
		$this->db->join('tb_jenis','tb_inventaris.id_jenis=tb_jenis.id_jenis');
		$this->db->join('tb_petugas','tb_inventaris.id_petugas=tb_petugas.id_petugas');
		$query = $this->db->get();
		return $query->result();
		//Mengambil data inventaris
	}
	public function ambil_pegawai()
	{
		$index=$this->session->userdata('id');
		$this->db->select('*');
		$this->db->from('tb_pegawai');
		$this->db->where('id_pegawai',$index);
		$query = $this->db->get();
		return $query->result();
		//Mengambil data pegawai
	}
	public function ambil_edit_peminjaman()
	{
		$id=$this->input->get('id');
		$this->db->select('*');
		$this->db->from('tb_peminjaman');
		$this->db->join('tb_pegawai','tb_peminjaman.id_pegawai=tb_pegawai.id_pegawai');
		$this->db->where('tb_peminjaman.id_peminjaman',$id);
		$query = $this->db->get();
		return $query->result();
		//Mengambil data peminjaman dan data pegawai dengan join
		//dengan status_peminjaman yang belum dikembalikan
	}
	public function mengedit_peminjaman()
	{
		$id=$this->input->get('id');
		$data['id_pegawai'] = $this->input->post('pegawai');
		$data['tanggal_pinjam'] = $this->input->post('tanggal');
		$this->db->where('id_peminjaman',$id);
		$this->db->update('tb_peminjaman',$data);
	}
	public function hapus_peminjaman()
	{
		$id=$this->input->post('id_peminjaman');
		$this->db->where('id_peminjaman',$id);
		$this->db->delete('tb_peminjaman');
	}
	public function tambah_peminjaman($id)
	{	
		$data['id_peminjaman']=$id;
		$data['id_pegawai']=$this->input->post('pegawai');
		$data['tanggal_pinjam']=$this->input->post('tanggal');
		$data['status_peminjaman']=0;
		$this->db->insert('tb_peminjaman',$data);

		$data2['id_detail_pinjam']=uniqid();
		$data2['id_peminjaman']=$id;
		$data2['id_inventaris']=$this->input->post('nama_barang');
		$data2['jumlah_pinjam']=$this->input->post('jumlah_pinjam');
		$this->db->insert('tb_detail_pinjam',$data2);
		//Menambah tabel peminjaman dan detail_pinjam

	}
	public function detail_peminjaman()
	{
		$id=$this->input->get('id');
		$this->db->select('*');
		$this->db->from('tb_detail_pinjam');
		$this->db->join('tb_peminjaman','tb_detail_pinjam.id_peminjaman=tb_peminjaman.id_peminjaman');
		$this->db->join('tb_pegawai','tb_peminjaman.id_pegawai=tb_pegawai.id_pegawai');
		$this->db->join('tb_inventaris','tb_detail_pinjam.id_inventaris=tb_inventaris.id_inventaris');
		$this->db->where('tb_detail_pinjam.id_peminjaman',$id);
		$query = $this->db->get();
		return $query->result();
		//Menampilakan detail pinjam menurut id peminjaman
	}

	public function tambah_detail_pinjam()
	{
		$id=$this->input->get('id');
		$data['id_detail_pinjam']=uniqid();
		$data['id_peminjaman']=$id;
		$data['id_inventaris']=$this->input->post('nama_barang');
		$data['jumlah_pinjam']=$this->input->post('jumlah');
		$this->db->insert('tb_detail_pinjam',$data);
		//Menambah barang yang dipinjam 
	}
	public function hapus_detail_pinjam()
	{
		$id=$this->input->post('id_detail_pinjam');
		$this->db->where('id_detail_pinjam',$id);
		$this->db->delete('tb_detail_pinjam');
	}
	public function pengembalian()
	{	
		$id=$this->input->post('id_peminjaman');
		$data['status_peminjaman']=1;
		$data['tanggal_kembali']=$this->input->post('tanggal_kembali');
		$this->db->where('id_peminjaman',$id);
		$this->db->update('tb_peminjaman',$data);
		//Mengembalikan peminjaman / merubah status peminjaman
	}
	public function ambil_pengembalian()
	{
		$index=$this->session->userdata('id');
		$satu = 1;
		$this->db->select('*');
 		$this->db->from('tb_detail_pinjam');
 		$this->db->join('tb_inventaris','tb_detail_pinjam.id_inventaris=tb_inventaris.id_inventaris');
 		$this->db->join('tb_peminjaman','tb_detail_pinjam.id_peminjaman=tb_peminjaman.id_peminjaman');
 		$this->db->join('tb_pegawai','tb_peminjaman.id_pegawai=tb_pegawai.id_pegawai');
 		$this->db->where('tb_pegawai.id_pegawai',$index);	
		$this->db->where('tb_peminjaman.status_peminjaman',$satu);	
		$this->db->group_by('tb_peminjaman.id_peminjaman');	
    	$query = $this->db->get();
    	return $query->result();
		//Mengambil data detail pinjam, data peminjaman, dan data pegawai dengan join
		//dengan status_peminjaman yang sudah dikembalikan
	}
}