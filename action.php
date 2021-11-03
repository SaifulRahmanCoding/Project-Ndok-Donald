<?
// koneksi ke database
require_once('koneksi.php');

// Memvalidasi inputan
if (isset($_POST['namaPromo'])) {
	$namaPromo = $_POST['namaPromo'];
}
else {
	echo "Error nama promo";
	exit();
} //status error

if (isset($_POST['hargaNormal'])) {
	$hargaNormal = $_POST['hargaNormal'];
}
else {
	echo "Error harga normal";
	exit();
} //status error

if (isset($_POST['hargaPromo'])) {
	$hargaPromo = $_POST['hargaPromo'];
}
else {
	echo "Error harga promo";
	exit();
} //status error

if (isset($_POST['keterangan'])) {
	$keterangan = $_POST['keterangan'];
}
else {
	echo "Error keterangan";
	exit();
} //status error
// mnegatasi jika terdapat error pada input

// mengambil data file upload
$files=$_FILES['foto'];
$path="upload/";

// menangani file upload
// name disini nama dari file nya, bukan dari input name
// tmp_name adalah nama sementara
if (!empty($files['name'])) {
	$filepath  =  $path.$files['name'];
	$upload = move_uploaded_file($files['tmp_name'], $filepath);
}
else{
	$filepath = "";
	$upload =  false;
}

// menangani error saat mengupload
if ($upload = false ) {
	$produk['foto'] = 'upload/default.jpg';
}

// Menyiapkan Query MySQL untuk dieksekusi
$query = "INSERT INTO promo (foto,nama_promo,harga_normal,harga_promo,keterangan) VALUES ('{$filepath}','{$namaPromo}','{$hargaNormal}','{$hargaPromo}','{$keterangan}')";

// mengeksekusi MySQL Query
$insert = mysqli_query($db, $query);

// menangani ketika error pada saat eksekusi query
if ($insert == false) {
	echo "Error dalam menambah data ke database. <a href='form_promo.php'>Kembali</a>";
}
else{
	header("Location: promo.php");
}

?>