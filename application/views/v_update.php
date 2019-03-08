<table>
<form action="<?=base_url().'index.php/c_daftar_m'?>" method="POST">
	<tr>
		<td>Kode Masjid</td>
		<td>:</td>
		<td><input type="hidden" name="kode_masjid" value="<?=$r['kode_masjid']?>"><?=$r['kode_masjid']?></td>
	</tr>
	<tr>
		<td>Nama Masjid</td>
		<td>:</td>
		<td><input type="text" name="nama_m" value="<?=$r['nama_m']?>"></td>
	</tr>
	<tr>
		<td>Alamat Masjid</td>
		<td>:</td>
		<td><input type="text" name="alamat_m" value="<?=$r['alamat_m']?>"></td>
	</tr>
	<tr>
		<td>Tahun Berdiri</td>
		<td>:</td>
		<td><input type="text" name="tahun_berdiri" value="<?=$r['tahun_berdiri']?>"></td>
	</tr>
	<tr>
		<td>Jumlah Tampungan</td>
		<td>:</td>
		<td><input type="text" name="jumlah_tampungan" value="<?=$r['jumlah_tampungan']?>"></td>
	</tr>
	<tr>
		<td>Status Tanah</td>
		<td>:</td>
		<td><input type="text" name="status_tanah" value="<?=$r['status_tanah']?>"></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="submit" value="submit"></td>
	</tr>
</form>
</table>