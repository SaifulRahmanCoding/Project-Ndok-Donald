<?

// menegcek dan mendapatkan data session
require_once('session_check.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registrasi Petugas</title>
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

	<div id="form">
		
		<div class="container">
			
			<div class="row d-flex justify-content-center">
				
				<div class="col col-10 col-sm-8 col-lg-6 p-5 bg-white">
					
					<div class="label-form mb-1 p-2">
						<h2 class="mb-4" align="center"><i class="fas fa-user-circle"></i><br>Buat Akun</h2>
					</div>

					<form action="action_register.php" method="POST">
						
						<div class="from-group mb-2">
							
							<label for="email" class="mb-2">Email</label>
							<input name="email" id="email" type="email" class="form-control" placeholder="xxxx@mail.xxx" required>

						</div>

						<div class="from-group mb-2">
							
							<label for="name" class="mb-2">Nama</label>
							<input name="name" id="name" type="text" class="form-control mb-2" placeholder="Nama Lengkap" required>

						</div>

						<div class="from-group mb-2">
							
							<label for="password" class="mb-2">Password</label>
							<input name="password" id="password" type="password" class="form-control mb-2" placeholder="masukkan password" required>

						</div>

						<div class="from-group mb-2">
							
							<label for="re-password" class="mb-2">Konfirmasi Password</label>
							<input name="re-password" id="re-password" type="password" class="form-control mb-2" placeholder="masukkan ulang password" required>

						<input name="submit" type="submit" value="Buat Akun" class="btn text-white mt-3 mb-3 col-12">

						<div class="label-form col-12 p-2" align="center">
							<a href="login.php">Sudah Memiliki Akun?</a>
						</div>

						</div>

					</form>

				</div>

			</div>

		</div>

	</div>
	<?
	require('komponen/footer.php');
	?>
</body>
</html>