<?
// menegcek dan mendapatkan data session
require_once('session_check.php');

if ($sessionStatus == false) {
	header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Input</title>
	<?
	require('config/style.php');
	require('config/script.php');
	?>
</head>
<body>
	<!-- header -->
	<?
	require('komponen/navbar.php');
	?>

	<!-- form input -->
	<div id="form" class="pt-5">
		
		<div class="container">

			<div class="row d-flex justify-content-center">

				<div class="col col-10 col-sm-8 col-lg-6 p-5 bg-white">
					<h3 align="center" class="mb-5">Silahkan Input Promo</h3>
					<form action="action.php" method="POST" enctype="multipart/form-data">

						<div class="form-group mb-2">

							<label for="foto" class="mb-2">Foto Promo</label>

							<input name="foto" id="foto" class="form-control" type="file">
							
							<p class="card-text mt-1" style="font-size: 10px; color: red !important;">*di sarankan upload gambar ratio Square [ 1 : 1 ]</p>

						</div>
						<div class="form-group mb-3">
							<label for="namaPromo" class="mb-2">Nama Promo</label>
							<input name="namaPromo" id="namaPromo"  class="form-control" type="text" placeholder="Nama Promo" required>
						</div>

						<div class="form-group mb-3">
							<label for="hargaNormal" class="mb-2">Harga Normal</label>
							<input name="hargaNormal" id="hargaNormal"  class="form-control" type="number" placeholder="harga normal produk ( Rp. )" required>
						</div>

						<div class="form-group mb-3">
							<label for="hargaPromo" class="mb-2">Harga Promo</label>
							<input name="hargaPromo" id="hargaPromo"  class="form-control" type="number" placeholder="Harga Promo Produk ( Rp. )" required>
						</div>

						<div class="form-group mb-3">
							<label for="keterangan" class="mb-2">Keterangan</label>
							<textarea name="keterangan" class="form-control" id="keterangan" rows="8" placeholder="isi keterangan promo"></textarea>
						</div>

						<div class="col-12 d-flex justify-content-center">
							<input type="submit" name="submit" value="Input" class="btn text-white col-6 mt-3 mb-3">
							&nbsp
							<a href="promo.php" class="btn text-white col-6 mt-3 mb-3">Kembali</a>
						</div>

					</form>

				</div>

			</div>

		</div>

	</div>
	<!-- end form input -->

	<?
	require('komponen/footer.php');
	?>
</body>
</html>