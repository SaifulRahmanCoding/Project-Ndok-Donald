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
	<title>Form Sempel Produk</title>
	<?
	require('config/style.php');
	require('config/script.php');
	?>
</head>
<body>
	<div id="header">
		<?
		require('komponen/navbar.php');
		?>
	</div>

	<!-- form input -->
	<div id="form" class="pt-5">
		
		<div class="container">

			<div class="row d-flex justify-content-center">

				<div class="col col-10 col-sm-8 col-lg-6 p-5 bg-white">
					<h3 align="center" class="mb-5">Silahkan Input Sempel Produk</h3>
					<form action="action_produk.php" method="POST" enctype="multipart/form-data">

						<div class="form-group mb-2">

							<label for="fotoProduk" class="mb-2">Foto Sempel Produk</label>

							<input name="fotoProduk" id="fotoProduk" class="form-control" type="file">

						</div>
						
						<div class="form-group mb-3">
							<label for="caption" class="mb-2">Caption</label>
							<textarea name="caption" class="form-control" id="caption" rows="8" placeholder="isi caption produk jika ada!"></textarea>
						</div>

						<div class="col-12 d-flex justify-content-center">
							<input type="submit" name="submit" value="Input" class="btn text-white col-6 mt-3 mb-3">
							&nbsp
							<a href="produk.php" class="btn text-white col-6 mt-3 mb-3">Kembali</a>
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