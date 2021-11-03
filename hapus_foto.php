<?

require_once('koneksi.php');

// menegcek dan mendapatkan data session
require_once('session_check.php');

if ($sessionStatus == false) {
	header("Location: index.php");
}

// mendapatkan NIS 
if (isset($_GET['id_promo'])) {
	$idPromo = $_GET['id_promo'];
}
else{
	echo "ID Promo tidak ditemukan! <a href='form_edit.php'>Kembali</a>";
	echo $_GET['id_promo'];
	exit();
}

// Query Get Data promo
$query="SELECT * FROM promo WHERE id_promo='$idPromo'";

// eksekusi Query
$result=mysqli_query($db,$query);

// fetching data
foreach ($result as $promo) {
	$fotoLama=$promo['foto'];
}

if (!is_null($fotoLama) && !empty($fotoLama)) {

	$remove=true;
	if (file_exists($fotoLama)) {
		$remove=unlink($fotoLama);
	}
	if ($remove) {
		// menyiapkan Query
		$query="UPDATE promo SET foto = NULL WHERE id_promo='{$idPromo}'";

		// mengeksekusi MySQL Query
		$insert=mysqli_query($db,$query);
	}
}
header("Location: form_edit.php?id_promo={$idPromo}");
?>