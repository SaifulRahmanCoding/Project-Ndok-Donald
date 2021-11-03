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
if (isset($_GET['id_promo'])) {
	$idPromo = $_GET['id_promo'];
}
else {
	echo "ID Promo tidak ditemukan! <a href='promo.php'>Kembali</a>";
	exit();
}

$query = "SELECT * FROM promo WHERE id_promo = '$idPromo'";
$result = mysqli_query($db,$query);

foreach($result as $promo){
	$foto = $promo['foto'];
	$namaPromo = $promo['nama_promo'];
	$hargaNormal = $promo['harga_normal'];
	$hargaPromo = $promo['harga_promo'];
	$keterangan = $promo['keterangan'];

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Edit</title>
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

					<h3 align="center" class="mb-2">Edit Promo</h3>

					<form action="action_edit.php" method="POST" enctype="multipart/form-data">

						<input type="hidden" name="idPromo" value='<? echo $idPromo;?>'>

						<? if (!is_null($foto) && !empty($foto)) : ?>
						<div class="form-group mb-3 text-center">
							<img src="<?=$foto?>" class="preview">
						</div>
							<a href="hapus_foto.php?id_promo=<?=$idPromo?>" class="btn btn-danger mb-2 p-1">Hapus Foto</a>
						<? else :?>
						<div class="form-group mb-3 text-center">
							<img src="upload/default.png" alt="default">
						</div>	
						<? endif; ?>

						<div class="form-group mb-2">

							<label for="foto" class="mb-2">Foto Promo</label>

							<input name="foto" id="foto" class="form-control" type="file">

							<p class="card-text mt-1" style="font-size: 10px; color: red !important;">*di sarankan upload gambar ratio Square [ 1 : 1 ]</p>
							
						</div>

						<div class="form-group mb-3">
							<label for="namaPromo" class="mb-2">Nama Promo</label>
							<input name="namaPromo" id="namaPromo"  class="form-control" type="text" value="<?=$namaPromo?>" placeholder="Nama Promo" required>
						</div>

						<div class="form-group mb-3">
							<label for="hargaNormal" class="mb-2">Harga Normal</label>
							<input name="hargaNormal" id="hargaNormal"  class="form-control" type="number" value="<?=$hargaNormal?>" placeholder="harga normal produk ( Rp. )" required>
						</div>

						<div class="form-group mb-3">
							<label for="hargaPromo" class="mb-2">Harga Promo</label>
							<input name="hargaPromo" id="hargaPromo"  class="form-control" type="number" value="<?=$hargaPromo?>" placeholder="Harga Promo Produk ( Rp. )" required>
						</div>

						<div class="form-group mb-3">
							<label for="keterangan" class="mb-2">Keterangan</label>
							<textarea name="keterangan" class="form-control" id="keterangan" rows="8" placeholder="isi keterangan promo"><?=$keterangan?></textarea>
						</div>

						<div class="col-12 d-flex justify-content-center">
							<input type="submit" name="submit" value="Edit" class="btn text-white col-6 mt-3 mb-3">
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