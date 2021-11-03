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
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ndok Donald</title>
	<?
	require('config/style.php');
	require('config/script.php');
	?>
</head>
<body">
	<!-- header -->
	<div id="header">
		<?
		require('komponen/navbar.php');
		?>
	</div>

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
	<!-- landing page background -->
	<div id="landingpage" class="pb-3 pb-sm-0">
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-6 col-lg-5 pt-3 pt-lg-0 d-flex justify-content-center">
					<img src="img/asin.png" alt="..." class="col-6 col-sm-12">
				</div>
				<div class="landing-page col-12 col-sm-6 col-lg-7 pt-2 pt-sm-5 ps-3 ps-sm-5 text-center text-sm-start">
					<p class="judul fw-bolder mb-2 mb-sm-4 text-center text-sm-start">Beli Telur Asin Secara <a class="text-white ps-2 pe-2 text-decoration-none rounded">Mudah</a> dan <a class="text-white ps-2 pe-2 text-decoration-none rounded">Murah</a></p>
					<p class="subjudul pb-0 mb-sm-2 pb-sm-4 mb-3 mb-lg-4 text-center text-sm-start">Telor Asin Kekinian dengan Pengolahan yang Istimewa</p>
					<a href="https://wa.me/6282264120926?text=Hai%2C%20saya%20tertarik%20dengan%20produk%20telur%20asin%20anda.%0A%0AData%20Pembeli%20%0ANama%20%3A%0AAlamat%20%3A%0A%0APesanan%0A-" class="tombol-pesan text-decoration-none text-center text-sm-start">BELI SEKARANG</a>
				</div>
			</div>
		</div>
	</div>

	<div id="info-produk" class="bg-light pt-3 pb-2 mt-4">
		<div class="container">
			<div class="row">
				<div class="col-4 p-4 mb-2 text-center">
					<p>
						Harga Per Satuan<br><a class="fw-bolder text-decoration-none text-dark">Rp. xx.xxx</a>
					</p>
				</div>
				<div class="col-4 p-4 mb-2  text-center">
					<p>
						Harga Per Lusin<br><a class="fw-bolder text-decoration-none text-dark">Rp. xx.xxx</a>
					</p>
				</div>
				<div class="col-4 p-4 mb-2  text-center">
					<p>
						Harga Per Kilogram<br><a class="fw-bolder text-decoration-none text-dark">Rp. xx.xxx</a>
					</p>
				</div>
			</div>
		</div>
	</div>

	<!-- katalog -->
	<div id="promo" class="mt-3 pt-3">

		<div class="container">

			<p class="judul-promo text-center">PROMO</p>
			<p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Ea, cupiditate.</p>
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
									if (strlen($promo['nama_promo'])>33) {
										echo substr($promo['nama_promo'],0,33)."...";

									}else{echo $promo['nama_promo'];}
									?>
								</p>
								<a class="card-text fw-bolder fs-6 text-decoration-none text-dark">Rp. <?=$format_promo?></a><br>
								<a class="card-text text-decoration-line-through text-dark">Rp. <?=$format_normal?></a> 
								<p class="mt-3 mb-2 pb-0 d-flex justify-content-center">
									<a href="detail.php?id_promo=<?=$promo['id_promo']?>" class="detail text-decoration-none fw-bolder">DETAIL</a>
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

		<!-- isi home -->
		<div id="produk" class=" pb-4 pt-4">

			<div class="container">
				<p class="judul-produk text-center">SEMPEL PRODUK</p>
				<p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Atque, veniam?</p>
				<!-- batas row -->
				<div class="row">
					<!-- colom kiri -->
					<div class="col-12">
						<div class="row">
							<?
							// pemanggilan data dari tabel promo
							$query= "SELECT * FROM produk ORDER BY id_produk DESC LIMIT 0,6";
							$result=mysqli_query($db, $query);
							// foreach
							foreach ($result as $produk) {

							 // cek foto
								if (!file_exists($produk['foto'])) {
									$produk['foto']='upload/default.png';
								}

								if (is_null($produk['foto'])||empty($produk['foto'])) {
									$produk['foto']='upload/default.png';
								}

								?>
								<!--box promo-->
								<div class="col-6 col-sm-4 text-sm-2 ps-1 pe-1">
									<div class="card mb-2" style="border: none;">
										<!-- Button to Open the Modal -->
										<button type="button" class="btn btn-white p-0" data-bs-toggle="modal" data-bs-target="#myModal<?=$produk['id_produk']?>">
											<div class="foto-produk">
												<img src='<?=$produk['foto']?>' class='card-img-top'>
											</div>
										</button>
										<!-- The Modal -->
										<div class="modal fade" id="myModal<?=$produk['id_produk']?>">
											<div class="modal-dialog modal-dialog-centered">
												<div class="modal-content">

													<!-- Modal body -->
													<div class="modal-body">
														<div class="tutup text-end mb-2">
															<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
														</div>
														<img src='<?=$produk['foto']?>' class='card-img-top'>
													</div>

													<!-- Modal footer -->
													<div class="modal-footer">
														<p style="text-align: justifyx;"><?=$produk['caption']?></p>
													</div>

												</div>
											</div>
										</div>
										<? if ($sessionStatus) :?>
											<div class="card-body">
												<p class="text-center mb-0 mt-3">
													<a class="card-text text-decoration-none text-success fs-6" href="form_edit_produk.php?id_produk=<?=$produk['id_produk']?>"><i class="fas fa-edit"></i>
													</a>&nbsp | &nbsp

													<a class="card-text text-decoration-none text-danger fs-6" href="delete_produk.php?id_produk=<?=$produk['id_produk']?>">
														<i class="fa fa-trash-alt"></i>
													</a>
												</p>
											</div>
										<?endif;?>
									</div>
								</div>
							<?}?>
							<!-- end foreach -->
						</div>
					</div>

					<div class="col-12 d-flex justify-content-center pt-2">
						<div class="lain-nya text-center rounded">
							<a href="produk.php" class="text-dark text-decoration-none shadow-sm">Lain-nya</a>
						</div>
					</div>
				</div> <!-- end batas row -->
			</div> <!-- end container -->
		</div>

	<?
	require('komponen/footer.php');
	?>
</body>
</html>