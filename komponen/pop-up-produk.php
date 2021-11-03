<!-- Button to Open the Modal -->
<button type="button" class="btn btn-white" data-bs-toggle="modal" data-bs-target="#myModal">

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

						<div class="foto-produk">
							<img src='<?=$produk['foto']?>' class='card-img-top'>
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
</button>

<!-- The Modal -->
<div class="modal fade" id="myModal">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
				<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
			</div>

			<!-- Modal body -->
			<div class="modal-body">
				<img src='<?=$produk['foto']?>' class='card-img-top'><br>
				<p><?=$produk['caption']?></p>
			</div>

			<!-- Modal footer -->
			<div class="modal-footer">

			</div>

		</div>
	</div>
</div>