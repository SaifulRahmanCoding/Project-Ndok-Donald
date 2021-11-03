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
	<title>Lokasi</title>
	<?
	require('config/style.php');
	require('config/script.php');
	?>
</head>
<body>
	<!-- header -->
	<div id="header">
		<?
		require('komponen/navbar.php');
		?>
	</div>
	<div id="about" class="mt-3 pt-3 pb-3">
			<div class="container">
				<h1 class="text-center mb-3">Ndok Donald Borobudur</h1>
				<div class="row mb-2">
					
					<div class="col-12 col-sm-7 col-lg-7">
						<img src="img/produk-l.jpg" alt="" style="width:100%;">
					</div>
					<div class="col-kanan col-12 col-sm-5 col-lg-5 p-0 mt-2 mb-2 shadow-sm">
						<div class="col-12 pt-3 fs-4 fw-bolder">
							<p class="text-center mb-0">
								ABOUT US
							</p>
						</div>
						<div class="col-12 p-4 mt-0 mt-sm-2">
							<p style="text-align: justify;">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla quae, sequi odit minus iure maxime consequatur enim quis hic totam non nobis fuga voluptatum? Quis, impedit corrupti quaerat labore, soluta dolorem architecto in, vel doloribus quam et rerum dolore commodi deleniti optio deserunt nobis neque dolorum nulla maxime a itaque.
							</p>
						</div>

					</div>
				</div>
				<!-- end row -->
			</div>
		</div>
	<?
	require('komponen/footer.php');
	?>
</body>
</html>