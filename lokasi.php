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
	<!-- kontak -->
	<?
	require ('komponen/kontak-wa.php');
	?>
	<!-- end header -->
	<div id="lokasi">
		<div class="container">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d643.4412595441248!2d114.21753470034427!3d-7.7531013859039755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd12bc52ae61be3%3A0x472ab0b3e98cad11!2sKedai%20NANI!5e0!3m2!1sen!2sid!4v1635177939556!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
	</div>

	<?
	require('komponen/footer.php');
	?>
</body>
</html>