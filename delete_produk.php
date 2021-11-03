<?

require_once('koneksi.php');

// menegcek dan mendapatkan data session
require_once('session_check.php');

if ($sessionStatus == false) {
	header("Location: index.php");
}

//mendapatkan data produk dari Database
if (isset($_GET['id_produk'])) {
	$idProduk = $_GET['id_produk'];
}
else{ echo "ID tidak ditemukan! <a href='produk.php'>Kembali</a>";
	exit();
}

// Query Get data produk
$query = "DELETE FROM produk WHERE id_produk = '$idProduk'";

// eksekusi Query
$result = mysqli_query($db,$query);

if (!$result) {
	exit("Gagal Menghapus Data!");
}

header("Location:produk.php");

?>