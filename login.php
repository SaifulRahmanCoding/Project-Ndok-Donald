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
	<title>Document</title>
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

	<!-- from login admin -->
	<div id="form">
		
		<div class="container">
			
			<div class="row d-flex justify-content-center">
				
				<div class="col col-10 col-sm-8 col-lg-6 p-5 bg-white"> 

					<div class="label-form mb-1 p-2">
						<h2 align="center"><i class="fas fa-user-circle"></i><br>Login</h2>
					</div>

					<form action="action_login.php" method="POST">
						
						<div class="from-group mb-2">
							
							<label for="email" class="mb-2">Email</label>
							<input name="email" id="email" type="email" class="form-control" placeholder="xxxx@mail.xxx" required>

						</div>

						<div class="from-group mb-2">
							
							<label for="password" class="mb-2 mt-2">Password</label>
							<input name="password" id="password" type="password" class="form-control" placeholder="masukkan password" required>

						</div>
						
						<p class="label-form mt-4 mb-2">
							*jika tidak memiliki akun, silahkan <a href="registration.php">Registrasi</a>
						</p>

						<input name="submit" type="submit" value="Masuk" class="btn text-white mt-3 mb-3 col-12">

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