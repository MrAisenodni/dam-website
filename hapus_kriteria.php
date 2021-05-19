<?php
include 'koneksi.php';

$id_kriteria = $_GET['id_kriteria'];
$query = "DELETE FROM kriteria WHERE id_kriteria = '$id_kriteria'";
$result = mysqli_query($koneksi, $query);

if (!$result) {
	die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
} else {
	echo "<script>alert('Data Berhasil Dihapus!');window.location='home.php?page=kriteria'</script>";
}

?>