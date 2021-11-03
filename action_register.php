<?

require_once('koneksi.php');

// status tidak error
$error = 0;

// mamvalidasi inputan
if (isset($_POST['email'])) {
	$email = $_POST['email'];
}
else{
	$error = 1; //status error
}

if (isset($_POST['name'])) {
	$name = $_POST['name'];
}
else{
	$error = 1; //status error
}

if (isset($_POST['password'])) {
	$password = $_POST['password'];
}
else{
	$error = 1; //status error
}

if (isset($_POST['re-password'])) {
	$repassword = $_POST['re-password'];
}
else{
	$error = 1; //status error
}

// mengatasi jika terdapat error pada data inputan
if ($error == 1) {
	echo "Terjadi Kesalahan Pada Proses Input Data <a href='registration.php'>Kembali</a>";
	exit();
}

// pengecekan password dan konfirmasi password
if ($password != $repassword) {
	echo "Password Tidak Sama, Ulangi Mengisi Pendaftaran <a href='registration.php'>Kembali</a>";
	exit();
}
else{
	$password = hash("sha256", $password);
}

// menyiapkan Query MySQL untuk dieksekusi
$query = "INSERT INTO admin (email, nama, password) VALUES ('$email', '$name', '$password')";

// mengeksekusi MySQL Query
$insert = mysqli_query($db, $query);

// menangani ketika error pada saat eksekusi query
if ($insert == false) {
	echo "Error dalam menambah data. <a href='registration.php'>Kembali</a>";
}else{
	?>
		<div style="background: green; padding: 20px; color: white;">
			<h2>Sukses Buat Akun!</h2><br>
			<a href="index.php">Beranda </a>
			<a href="login.php">Login</a>
		</div>
	<?
}
?>