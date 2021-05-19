<?php
include 'koneksi.php';

$id_subkriteria = $_GET['id_subkriteria'];
$query = "DELETE FROM subkriteria WHERE id_subkriteria = '$id_subkriteria'";
$result = mysqli_query($koneksi, $query);

if (!$result) {
	die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
} else {
	echo "<script>alert('Data Berhasil Dihapus!');window.location='admin.php?page=subkriteria'</script>";
}

?>