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
	<title>Produk</title>
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

	<!-- katalog -->
	<div id="promo" class="mt-4">

		<div class="container">
			<div class="judul-promo text-center">
				<span>LIST PROMO PRODUK</span>
			</div>

				<div class="row mb-4 mt-2">

					<div class="col-12">

						<a href="form_promo.php" class="btn add promo text-success mt-2">Tambah</a>

					</div>

				</div>

				<div class="row">

					<div class="col table-responsive">

						<table class="table table-striped table-bordered responsive-utilities text-center">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">FOTO</th>
									<th scope="col">PROMO</th>
									<th scope="col">HARGA NORMAL</th>
									<th scope="col">HARGA PROMO</th>
									<th scope="col">DISKON</th>
									<th scope="col">KETERANGAN</th>
									<th scope="col">OPSI&nbspPENGEDITAN</th>
								</tr>
							</thead>

							<tbody>
								<?

								$query= "SELECT * FROM promo ORDER BY id_promo DESC";
								$result=mysqli_query($db, $query);
								// foreach
								$i=1;
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

									<tr>
										<th scope="row"><?=$i++?></th>
										<td><img src="<?=$promo['foto']?>" alt="error"></td>
										<td><?if (strlen($promo['nama_promo'])>35) {
											echo substr($promo['nama_promo'],0,35)."...";

											}else{echo $promo['nama_promo'];}?></td>
										<td><?=$promo['harga_normal']?></td>
										<td><?=$promo['harga_promo']?></td>
										<td><?=round($diskon,1)?>%</td>
										<td><?if (strlen($promo['keterangan'])>35) {
											echo substr($promo['keterangan'],0,35)."...";

											}else{echo $promo['keterangan'];}?></td>
										<td>
											<a class="card-text text-decoration-none text-success fs-6" href="form_edit.php?id_promo=<?=$promo['id_promo']?>"><i class="fas fa-edit"></i>
											</a>&nbsp | &nbsp

											<a class="card-text text-decoration-none text-danger fs-6" href="delete.php?id_promo=<?=$promo['id_promo']?>">
												<i class="fa fa-trash-alt"></i>
											</a>
										</td>
									</tr>
								
								<?}?>

						</tbody>
					</table>

				</div>

			</div>

		</div> <!-- end container --> 
	</div>
	<?
	require('komponen/footer.php');
	?>
</body>
</html>