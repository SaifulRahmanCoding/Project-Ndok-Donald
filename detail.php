<?
// koneksi ke database
require_once('koneksi.php');

// menegcek dan mendapatkan data session
require_once('session_check.php');

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
	$idPromo = $promo['id_promo'];
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
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Detail</title>
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

	<div id="detail-promo">
		<div class="container">
				
			<div class="row mt-3 mb-5">
				<h2 class="text-center mb-5">Detail Dari Promo</h2>
				<div class="col-12 col-sm-6 d-flex justify-content-center justify-content-sm-end">
					<div class="col-10 col-sm-11 col-lg-8">
						
					<img src="<?=$foto?>" style="width: 100%; max-height: 450px; object-fit: cover;" alt="">
					</div>
				</div>
				<div class="col-12 col-sm-6 ps-3 ps-sm-5 mt-3 mt-sm-0">
					<div class="row d-flex justify-content-center justify-content-sm-start">
						<div class="col-10 col-sm-11 col-lg-8" style="border: 3px solid #ECECEC; border-radius: 3%;">
							
							<h3 class="mt-3 mb-3 mb-sm-5 text-center" style="font-family: verdana;"><?=$namaPromo?></h3>
							<p>
								<a class="fw-bolder text-decoration-none text-dark">Harga :</a> Rp. <?=$hargaPromo?> <a class="text-decoration-line-through text-secondary">Rp. <?=$hargaNormal?></a>
							</p>
							<p class="mb-5"><a class="fw-bolder text-decoration-none text-dark">Keterangan :</a><br>
								<?=$keterangan?>
							</p>
							<a href="#" class="btn col-12 text-decoration-none  text-sm-start p-2 d-flex justify-content-center mb-4 fw-bolder text-white" style="background-color: coral;">Beli Harga Promo</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- katalog -->
	<div id="promo" class="mt-5 pt-3">

		<div class="container">
			<p class="judul-promo">Promo Lain</p>
			<!-- strat row -->
			<div id="autoWidth" class="cs-hidden mb-4 mt-2">

				<?
				// pemanggilan data dari tabel promo
				$query= "SELECT * FROM promo ORDER BY id_promo DESC";
				$result = mysqli_query($db, $query);
				// foreach
				foreach ($result as $promo) {

				 // cek foto
					if (!file_exists($promo['foto'])) {
						$promo['foto']='upload/default.png';
					}

					if (is_null($promo['foto'])||empty($promo['foto'])) {
						$promo['foto']='upload/default.png';
					}

					$harga_normal = $promo['harga_normal'];
					$harga_promo = $promo['harga_promo'];
					$format_normal = number_format($harga_normal,0,",",".");
					$format_promo = number_format($harga_promo,0,",",".");

					$hitung = $promo['harga_normal'] - $promo['harga_promo'];
					$diskon = ($hitung / $promo['harga_normal']) * 100;
					?>
					<!--box promo-->
					<div class="slider">
						<div class="card mb-2 shadow-sm">
							<div class="foto-promo">
								<img src='<?=$promo['foto']?>' class='card-img-top'>
								<div class="segitiga"></div>
								<p class="diskon">Diskon<br><?=round($diskon,1)?>%</p>
							</div>
							<div class="card-body">
								<p class="card-title fw-bolder">
									<?
									if (strlen($promo['nama_promo'])>28) {
										echo substr($promo['nama_promo'],0,28)."...";

									}else{echo $promo['nama_promo'];}
									?>


								</p>
								<a class="card-text fw-bolder fs-6 text-decoration-none text-dark">Rp. <?=$format_promo?></a><br>
								<a class="card-text text-decoration-line-through text-dark">Rp. <?=$format_normal?></a> 
								<p class="mt-3 mb-2 pb-0 d-flex justify-content-center">
									<a href="detail.php?id_promo=<?=$promo['id_promo']?>" class="detail text-decoration-none fw-bolder">Detail</a>
								</p>
							</div>
						</div>
					</div>
					<!-- end box promo -->
					<?}?>
					<!-- end foreach -->
				</div>
				<!-- end row -->
			</div>
			<!-- end container -->
		</div>

	<?
	require('komponen/footer.php');
	?>
</body>
</html>