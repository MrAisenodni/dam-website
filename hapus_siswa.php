<?php
include 'koneksi.php';

$id_siswa = $_GET['id_siswa'];
$sql = "SELECT * FROM siswa WHERE id_siswa = '$id_siswa'";
$hasil = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($hasil);
$nik = $data['nik'];
$query = "DELETE FROM siswa WHERE id_siswa = '$id_siswa'; DELETE FROM rank where nik = '$nik'";
$result = mysqli_multi_query($koneksi, $query);

if (!$result) {
	die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
} else {
	echo "<script>alert('Data Berhasil Dihapus!');window.location='admin.php?page=siswa'</script>";
}
?>