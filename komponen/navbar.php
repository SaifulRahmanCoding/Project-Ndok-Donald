<nav class="navbar smart-scroll navbar-expand-lg navbar-light ">

	<div class="container-fluid">

		<!-- navbar brand -->
		<a class="navbar-brand">
			<img src="img/ndok_donald.png" />
			Ndok Donald
		</a>

		<!-- navbar toggler -->
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Togglenavigation">

			<span class="navbar-toggler-icon"></span>

		</button>

		<!-- navbar collapse -->
		<div class="collapse navbar-collapse" id="navbarSupportedContent">

			<ul class="navbar-nav ms-auto">

				<li class="nav-item">
					<a class="nav-link" aria-current="page"  href="index.php">HOME</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" aria-current="page"  href="produk.php">SEMPEL</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" aria-current="page"  href="lokasi.php">LOKASI</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" aria-current="page"  href="about.php">ABOUT</a>
				</li>
				<? if($sessionStatus) : ?>
				<li class="nav-item">
					<a class="nav-link" aria-current="page"  href="promo.php">EDIT PROMO</a>
				</li>
				<? endif; ?>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Admin </a>

					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<? if ($sessionStatus) : ?>
							<li>
								<a class="dropdown-item" href="logout.php">Logout <i class="fa  fa-sign-out-alt"></i></a>
							</li>
							<li>
								<a class="dropdown-item" href="registration.php">Buat Akun Baru
								</a>
							</li>
						<? else : ?>
							<li>
								<a class="dropdown-item" href="login.php">Login <i class="fa fa-sign-in-alt"></i>
								</a>
							</li>
						<? endif; ?>
					</ul>

				</li>
			</ul>

		</div>

	</div>

</nav>