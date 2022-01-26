<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA Compatible" content="IE-edge">
	<title>Cetak</title>
</head>
<body>
	<h1 class="center">Laporan Peminjaman</h1>
	<table style="border-top: 1px solid; border-bottom: 1px solid; border-left: 1px solid; border-right: 1px solid">
    <tr>
            <th style="background-color: lightgrey; text-align: center; font-weight: bold;font-size: 10px; font-family: helvetica;padding: 10px;">No</th>
            <th style="background-color: lightgrey; text-align: center; font-weight: bold;font-size: 10px; font-family: helvetica;padding: 10px;">Nama Peminjam</th>
            <th style="background-color: lightgrey; text-align: center; font-weight: bold;font-size: 10px; font-family: helvetica;padding: 10px;">Nama Barang</th>
            <th style="background-color: lightgrey; text-align: center; font-weight: bold;font-size: 10px; font-family: helvetica;padding: 10px;">Tanggal Pinjam </th>
            <th style="background-color: lightgrey; text-align: center; font-weight: bold;font-size: 10px; font-family: helvetica;padding: 10px;">Tanggal Barang Dikembalikan</th>
            <th style="background-color: lightgrey; text-align: center; font-weight: bold;font-size: 10px; font-family: helvetica;padding: 10px;">Jumlah</th>
            <th style="background-color: lightgrey; text-align: center; font-weight: bold;font-size: 10px; font-family: helvetica;padding: 10px;">Status</th>
		</tr>
		<?php
                $no = 0;
                foreach ($laporan as $row) { 
                 $no++;
                 ?>
    <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $row->nama_pegawai;?></td>
                  <td><?php echo $row->nama_barang;?></td>
                  <td><?php echo $row->tanggal_pinjam;?></td>
                  <td><?php echo $row->tanggal_kembali;?></td>
                  <td><?php echo $row->jumlah_pinjam;?></td>
                  <td><?php if($row->status_peminjaman == 0){
                              echo '<span class="label label-danger">Belum Dikembalikan</span>';
                            }
                            else{
                              echo '<span class="label label-success">Sudah Dikembalikan</span>';
                            }?>
                  </td>
    </tr>
              <?php }?>
	</table>

</body>
</html>