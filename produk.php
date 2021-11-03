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
				<!-- colom kiri -->
				<div class="col-12">
					<div class="row">
						<?
							// pemanggilan data dari tabel promo
						$query= "SELECT * FROM produk ORDER BY id_produk DESC";
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
			</div>
		</div>
	</div>
	<?
	require('komponen/footer.php');
	?>
</body>
</html>