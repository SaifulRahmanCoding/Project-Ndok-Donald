<?
// koneksi ke database
require_once('koneksi.php');

if (isset($_POST['caption'])) {
	$caption = $_POST['caption'];
}
else {
	echo "Error dari caption";
	exit();
} //status error

// mengambil data file upload
$files=$_FILES['fotoProduk'];
$path="upload/produk/";

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
$query = "INSERT INTO produk (foto,caption) VALUES ('{$filepath}','{$caption}')";

// mengeksekusi MySQL Query
$insert = mysqli_query($db, $query);

// menangani ketika error pada saat eksekusi query
if ($insert == false) {
	echo "Error dalam menambah data ke database. <a href='form_produk.php.php'>Kembali</a>";
}
else{
	header("Location: produk.php");
}
?>