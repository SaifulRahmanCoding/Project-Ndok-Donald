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
					<a class="nav-link" aria-current="page"  href="produk.php">SAMPLE</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" aria-current="page"  href="lokasi.php">LOKASI</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" aria-current="page"  href="about.php">ABOUT</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">ADMIN </a>

					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<? if ($sessionStatus) : ?>
							<li>
								<a class="dropdown-item" href="promo.php">EDIT PROMO</a>
							</li>
							<li>
								<a class="dropdown-item" href="registration.php">REGISTRASI AKUN
								</a>
							</li>
							<li>
								<a class="dropdown-item" href="logout.php">LOGOUT <i class="fa  fa-sign-out-alt"></i></a>
							</li>
						<? else : ?>
							<li>
								<a class="dropdown-item" href="login.php">LOGIN <i class="fa fa-sign-in-alt"></i>
								</a>
							</li>
						<? endif; ?>
					</ul>

				</li>
			</ul>

		</div>

	</div>

</nav>