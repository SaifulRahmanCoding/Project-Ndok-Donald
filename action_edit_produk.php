<?

require_once('koneksi.php');

// menegcek dan mendapatkan data session
require_once('session_check.php');

if ($sessionStatus == false) {
	header("Location: index.php");
}

// mendapatkan data id barang dari Form
if (isset($_POST['idProduk'])) {
	$idProduk = $_POST['idProduk'];
}
else {
	echo "ID Produk tidak ditemukan! <a href='form_edit_produk.php'>Kembali</a>";
	exit();
}

// Query Get Data barang
$query="SELECT * FROM produk WHERE id_produk = '{$idProduk}'";

// eksekusi Query
$result = mysqli_query($db,$query);

// fetching data
foreach($result as $produk){
	$fotoLama = $produk['foto'];
	$caption = $produk['caption'];
}

// Memvalidasi inputan
if (isset($_POST['caption'])) {
	$caption = $_POST['caption'];
}
else {
	echo "Error caption";
	exit();
} //status error

// mengambil data file upload
$files = $_FILES['foto'];
$path = "upload/produk/";

// menangani file upload
if (!empty($files['name'])) {
	$filepath = $path.$files['name'];
	$upload = move_uploaded_file($files['tmp_name'], $filepath);

	if (file_exists($fotoLama)){
		unlink($fotoLama); //hapus foto lama
	}
}
else{
	$filepath = $fotoLama;
	$upload =  false;
}

// menangani error saat mengupload
if ($upload = false ) {
	$barang['foto']='upload/default.png';
}



// menyiapkan Query MySQL untuk dieksekusi

$query="UPDATE produk SET 
		foto = '{$filepath}', 
		caption = '{$caption}'
		WHERE id_produk = '{$idProduk}'";

// mengeksekusi MySQL Query
$insert=mysqli_query($db,$query);

// menangani ketika error pada saat eksekusi query
if ($insert == false) {
	echo "Error dalam mengubah data. <a href='form_edit_produk.php'>Kembali</a>";
}
else{
	header("Location: produk.php");
}

?>
