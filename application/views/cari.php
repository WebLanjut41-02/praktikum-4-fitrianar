
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
	</tr>
</thead>

	<?php
	$no=1;
	foreach($result as $r) {
		?>
	<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $r->kode_masjid ?></td>
		<td><?php echo $r->nama_m ?></td>
		<td><?php echo $r->alamat_m ?></td>
		<td><?php echo $r->tahun_berdiri ?></td>
		<td><?php echo $r->jumlah_tampungan ?></td>
		<td><?php echo $r->status_tanah ?></td>
	</tr>
	<?php
		$no++;
		}
	?>
</table><br>
</div>