<?
// menmapilkan file koneksi
require_once('koneksi.php');

// menegcek dan mendapatkan data session
require_once('session_check.php');

if ($sessionStatus == false) {
	header("Location: index.php");
}

// status tidak error
$error = 0;

//mendapatkan data ID
if (isset($_GET['id_produk'])) {
	$idProduk = $_GET['id_produk'];
}
else {
	echo "ID Produk tidak ditemukan! <a href='produk.php'>Kembali</a>";
	exit();
}

$query = "SELECT * FROM produk WHERE id_produk = '$idProduk'";
$result = mysqli_query($db,$query);

foreach($result as $produk){
	$foto = $produk['foto'];
	$caption = $produk['caption'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Edit Produk</title>
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

	<div id="form" class="pt-5">
		
		<div class="container">

			<div class="row d-flex justify-content-center">

				<div class="col col-10 col-sm-8 col-lg-6 p-5 bg-white">

					<h3 align="center" class="mb-2">Edit Produk</h3>

					<form action="action_edit_produk.php" method="POST" enctype="multipart/form-data">

						<input type="hidden" name="idProduk" value='<? echo $idProduk;?>'>

						<div class="form-group mb-3 text-center">
							<img src="<?=$foto?>" class="preview">
						</div>

						<div class="form-group mb-2">

							<label for="foto" class="mb-2">Ganti Foto Produk</label>

							<input name="foto" id="foto" class="form-control" type="file">

						</div>

						<div class="form-group mb-3">
							<label for="caption" class="mb-2">Caption</label>
							<textarea name="caption" class="form-control" id="caption" rows="8" placeholder="isi caption produk"><?=$caption?></textarea>
						</div>

						<div class="col-12 d-flex justify-content-center">
							<input type="submit" name="submit" value="Edit" class="btn text-white col-6 mt-3 mb-3">
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