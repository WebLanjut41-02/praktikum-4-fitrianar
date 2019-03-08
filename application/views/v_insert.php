<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>DaftarMasjid</title>
  </head>
  <body>
<center>
<h1>Form Data Masjid</h1></center>

<form action="<?=base_url().'index.php/c_daftar_m/insert';?>" method="POST">
<div class="container">
<div class="row mt-3">
	<div class="col-md-12">
	<div class="form-group">
	    <label for="kode_masjid"></label>
	    <input type="text" name="kode_masjid" class="form-control" id="kode_masjid" placeholder="Masukan kode masjid">
	</div>

	<div class="form-group">
	    <label for="nama">Nama Masjid</label>
	    <input type="text" name="nama_m" class="form-control" id="nama_m" placeholder=" Masukan nama masjid ">
	</div>

	<div class="form-group">
	    <label for="nama">Alamat Masjid</label>
	    <input type="text"  name="alamat_m" class="form-control" id="alamat_m" placeholder="Masukan alamat masjid">
	</div>

	<div class="form-group">
	    <label for="nama">Tahun Berdiri</label>
	    <input type="text"  name="tahun_berdiri" class="form-control" id="tahun_berdiri" placeholder="Masukan tahun berdiri">
	</div>

	<div class="form-group">
	    <label for="nama">Jumlah Tampungan</label>
	    <input type="text"  name="jumlah_tampungan" class="form-control" id="jumlah_tampungan" placeholder="Masukan jumlah tampungan">
	</div>

	<div class="form-group">
	    <label for="nama">Status Tanah</label>
	    <input type="text"  name="status_tanah" class="form-control" id="status_tanah" placeholder="Masukan status_tanah">
	</div>
	  <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</div>
</form>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>