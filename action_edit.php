<?

require_once('koneksi.php');

// menegcek dan mendapatkan data session
require_once('session_check.php');

if ($sessionStatus == false) {
	header("Location: index.php");
}

// mendapatkan data id barang dari Form
if (isset($_POST['idPromo'])) {
	$idPromo = $_POST['idPromo'];
}
else {
	echo "ID Produk tidak ditemukan! <a href='promo.php'>Kembali</a>";
	exit();
}

// Query Get Data barang
$query="SELECT * FROM promo WHERE id_promo = '{$idPromo}'";

// eksekusi Query
$result = mysqli_query($db,$query);

// fetching data
foreach($result as $promo){
	$fotoLama = $promo['foto'];
	$namaPromo = $promo['nama_promo'];
	$hargaNormal = $promo['harga_normal'];
	$hargaPromo = $promo['harga_promo'];
	$keterangan = $promo['keterangan'];
}

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

// mengambil data file upload
$files = $_FILES['foto'];
$path = "upload/";

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

$query="UPDATE promo SET 
		nama_promo = '{$namaPromo}', 
		harga_normal = '{$hargaNormal}',
		harga_promo = '{$hargaPromo}',
		keterangan = '{$keterangan}',
		foto = '{$filepath}' 
		WHERE id_promo = '{$idPromo}'";

// mengeksekusi MySQL Query
$insert=mysqli_query($db,$query);

// menangani ketika error pada saat eksekusi query
if ($insert == false) {
	echo "Error dalam mengubah data. <a href='form_edit.php'>Kembali</a>";
}
else{
	header("Location: promo.php");
}

?>
