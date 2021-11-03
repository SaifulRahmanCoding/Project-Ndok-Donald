<?
// koneksi ke database
require_once('koneksi.php');

// menegcek dan mendapatkan data session
require_once('session_check.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sampel Produk</title>
	<?
	require('config/style.php');
	require('config/script.php');
	?>
</head>
<body>
	<!-- kontak -->
	<div id="kontak">
		<div class="container">
			<div class="d-flex justify-content-center">
			<a href="https://wa.me/6282264120926?text=Hai%2C%20saya%20tertarik%20dengan%20produk%20telur%20asin%20anda.%0A%0AData%20Pembeli%20%0ANama%20%3A%0AAlamat%20%3A%0A%0APesanan%0A-" class="keterangan wa text-dark text-decoration-none">Tertarik ?<br><span class="fw-bolder text-success">Beli Sekarang</span></a>
			<a id="wa"><i class="fab fa-whatsapp"></i></a>
			</div>
		</div>
	</div>
	<!-- end kontak -->
	<!-- header -->
	<div id="header">
		<?
		require('komponen/navbar.php');
		?>
	</div>
	<div id="produk">
		<div class="container">
			<h1 class="text-center mt-5">Sampel Produk Kami</h1>
			<p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque, veniam?</p>
			<? if ($sessionStatus) : ?>
				<a href="form_produk.php" class="btn add produk text-success mt-2 mb-3">Tambah</a>
			<? endif ?>
			<div class="row">
				<? require('komponen/pop-up-produk.php'); ?>
			</div>
		</div>
	</div>
	<?
	require('komponen/footer.php');
	?>
</body>
</html>