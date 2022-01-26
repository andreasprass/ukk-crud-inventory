<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class m_admin extends CI_model{
	public function ambil_petugas()
	{
		$this->db->select('*');
		$this->db->from('tb_petugas');
		$query = $this->db->get();
		return $query->result();
		//Mengambil data petugas
	}
	public function ambil_username()
	{
		$id=$this->input->post('username');
		$this->db->select('username');
		$this->db->from('tb_petugas');
		$this->db->where('username',$id);
		$query = $this->db->get();
		return $query->row();
		//Mengambil data petugas
	}
	public function ambil_username_pgw()
	{
		$id=$this->input->post('username_pgw');
		$this->db->select('username_pgw');
		$this->db->from('tb_pegawai');
		$this->db->where('username_pgw',$id);
		$query = $this->db->get();
		return $query->row();
		//Mengambil data petugas
	}
	public function tambah_petugas()
	{
		$data['id_petugas']=uniqid();
		$data['nama_petugas']=$this->input->post('nama_petugas');
		$data['username']=$this->input->post('username');
		$data['password']=$this->input->post('password');
		$data['id_level']=$this->input->post('level');
		$this->db->insert('tb_petugas',$data);
		//Input data petugas
	}
	public function edit_petugas()
	{
		$id=$this->input->post('id_petugas');
		$data['nama_petugas']=$this->input->post('nama_petugas');
		$data['username']=$this->input->post('username');
		$data['id_level']=$this->input->post('level');
		$this->db->where('id_petugas',$id);
		$this->db->update('tb_petugas',$data);
		//Merubah data petugas
	}
	public function hapus_petugas()
	{
		$id=$this->input->post('id_petugas');
		$this->db->where('id_petugas',$id);
		$this->db->delete('tb_petugas');
		//Menghapus petugas
	}
	public function ambil_pegawai()
	{
		$this->db->select('*');
		$this->db->from('tb_pegawai');
		$query = $this->db->get();
		return $query->result();
		//Mengambil data pegawai
	}
	public function tambah_pegawai()
	{
		$data['id_pegawai']=uniqid();
		$data['nama_pegawai']=$this->input->post('nama_pegawai');
		$data['nip']=$this->input->post('nip');
		$data['alamat']=$this->input->post('alamat');
		$data['username_pgw']=$this->input->post('username_pgw');
		$data['password_pgw']=$this->input->post('password_pgw');
		$this->db->insert('tb_pegawai',$data);
		//Menambah data pegawai
	}
	public function edit_pegawai()
	{
		$id=$this->input->post('id_pegawai');
		$data['nama_pegawai']=$this->input->post('nama_pegawai');
		$data['nip']=$this->input->post('nip');
		$data['alamat']=$this->input->post('alamat');
		$data['username_pgw']=$this->input->post('username_pgw');
		$this->db->where('id_pegawai',$id);
		$this->db->update('tb_pegawai',$data);
		//Mengubah data pegawai
	}
	public function hapus_pegawai()
	{
		$id=$this->input->post('id_pegawai');
		$this->db->where('id_pegawai',$id);
		$this->db->delete('tb_pegawai');
		//Menghapus pegawai
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
	public function ambil_level()
	{
		$this->db->select('*');
		$this->db->from('tb_level');
		$query = $this->db->get();
		return $query->result();
		//Mengambil data dari tabel_level
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
	public function ambil_inventaris_edit()
	{
		$id=$this->input->get('id');
		$this->db->select('*');
		$this->db->from('tb_inventaris');
		$this->db->join('tb_ruang','tb_inventaris.id_ruang=tb_ruang.id_ruang');
		$this->db->join('tb_jenis','tb_inventaris.id_jenis=tb_jenis.id_jenis');
		$this->db->join('tb_petugas','tb_inventaris.id_petugas=tb_petugas.id_petugas');
		$this->db->where('id_inventaris',$id);
		$query = $this->db->get();
		return $query->result();
		//Mengambil data inventaris
	}
	public function tambah_inventaris()
	{
		$data['id_inventaris']=uniqid();
		$data['nama_barang']=$this->input->post('nama_barang');
		$data['kondisi']=$this->input->post('kondisi');
		$data['keterangan_barang']=$this->input->post('keterangan');
		$data['tanggal_register']=$this->input->post('tanggal');
		$data['kode_inventaris']=$this->input->post('kode_inventaris');
		$data['jumlah_barang']=$this->input->post('jumlah_barang');
		$data['id_petugas']=$this->input->post('nama_petugas');
		$data['id_ruang']=$this->input->post('ruang');
		$data['id_jenis']=$this->input->post('jenis');
		$this->db->insert('tb_inventaris',$data);
		//Menambahkan data inventaris pada database
	}
	public function edit_inventaris()
	{
		$id=$this->input->post('id');
		$data['nama_barang']=$this->input->post('nama_barang');
		$data['kondisi']=$this->input->post('kondisi');
		$data['tanggal_register']=$this->input->post('tanggal');
		$data['kode_inventaris']=$this->input->post('kode_inventaris');
		$data['jumlah_barang']=$this->input->post('jumlah_barang');
		$this->db->where('id_inventaris',$id);
		$this->db->update('tb_inventaris',$data);
		// Mengubah data inventaris
	}
	public function hapus_inventaris()
	{
		$id=$this->input->post('id_inventaris');
		$this->db->where('id_inventaris',$id);
		$this->db->delete('tb_inventaris');
		//Menghapus inventaris
	}
	public function ambil_peminjaman()
	{
		$this->db->select('*');
		$this->db->from('tb_peminjaman');
		$this->db->join('tb_pegawai','tb_peminjaman.id_pegawai=tb_pegawai.id_pegawai');
		$this->db->where('tb_peminjaman.status_peminjaman',0);
		$query = $this->db->get();
		return $query->result();
		//Mengambil data peminjaman dan data pegawai dengan join
		//dengan status_peminjaman yang belum dikembalikan
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
		$satu = 1;
		$this->db->select('*');
 		$this->db->from('tb_detail_pinjam');
 		$this->db->join('tb_inventaris','tb_detail_pinjam.id_inventaris=tb_inventaris.id_inventaris');
 		$this->db->join('tb_peminjaman','tb_detail_pinjam.id_peminjaman=tb_peminjaman.id_peminjaman');
 		$this->db->join('tb_pegawai','tb_peminjaman.id_pegawai=tb_pegawai.id_pegawai');
		$this->db->where('tb_peminjaman.status_peminjaman',$satu);	
		$this->db->group_by('tb_peminjaman.id_peminjaman');	
    	$query = $this->db->get();
    	return $query->result();
		//Mengambil data detail pinjam, data peminjaman, dan data pegawai dengan join
		//dengan status_peminjaman yang sudah dikembalikan
	}
	public function ambil_laporan()
	{
		$this->db->select('*');
		$this->db->from('tb_detail_pinjam');
		$this->db->join('tb_peminjaman','tb_detail_pinjam.id_peminjaman=tb_peminjaman.id_peminjaman');
		$this->db->join('tb_pegawai','tb_peminjaman.id_pegawai=tb_pegawai.id_pegawai');
		$this->db->join('tb_inventaris','tb_detail_pinjam.id_inventaris=tb_inventaris.id_inventaris');
		$query = $this->db->get();
		return $query->result();
		//Mengambil data detail pinjam, data peminjaman, dan data pegawai dengan join
		//rekapitulasi
	}
}