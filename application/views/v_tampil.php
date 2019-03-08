<center>
<div class="row mt-3">
  <div class="col-md-5">
   <form action="<?php echo base_url()?>index.php/c_daftar_m/search" method="post">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="Cari Masjid" name="keyword">
      <div class="input-group-append">
        <button class="btn btn-primary" type="submit">Cari</button>
      </div>
    </div>
   </form>
  </div>
 </div>
</center>

<center><h1>Data Masjid</h1></center>

<div class="container">
<table class="table table-striped">
	<thead>
	<tr>
		<th>No</th>
		<th>Kode Masjid</th>
		<th>Nama Masjid</th>
		<th>Alamat</th>
		<th>Tahun Berdiri</th>
		<th>Jumlah Tampungan</th>
		<th>Status Tanah</th>
		<th>Aksi</th>

	</tr></thead>
	<?php
	$no=1;


	foreach($data as $r) {
		?>
	<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $r['kode_masjid'] ?></td>
		<td><?php echo $r['nama_m'] ?></td>
		<td><?php echo $r['alamat_m'] ?></td>
		<td><?php echo $r['tahun_berdiri'] ?></td>
		<td><?php echo $r['jumlah_tampungan'] ?></td>
		<td><?php echo $r['status_tanah'] ?></td>
		<td><a href="<?=base_url().'index.php/c_daftar_m/delete/'.$r['kode_masjid']?>">Hapus</a> ||
		<a href="<?=base_url().'index.php/c_daftar_m/update/'.$r['kode_masjid']?>">Edit</a></td>
	</tr>
	<?php
		$no++;
		}
	?>
</table><br>
</div>