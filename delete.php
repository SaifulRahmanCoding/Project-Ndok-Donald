<?

require_once('koneksi.php');

// menegcek dan mendapatkan data session
require_once('session_check.php');

if ($sessionStatus == false) {
	header("Location: index.php");
}

//mendapatkan data produk dari Database
if (isset($_GET['id_promo'])) {
	$idPromo = $_GET['id_promo'];
}
else{ echo "ID tidak ditemukan! <a href='promo.php'>Kembali</a>";
	exit();
}

// Query Get data produk
$query = "DELETE FROM promo WHERE id_promo = '$idPromo'";

// eksekusi Query
$result = mysqli_query($db,$query);

if (!$result) {
	exit("Gagal Menghapus Data!");
}

header("Location:promo.php");

?>