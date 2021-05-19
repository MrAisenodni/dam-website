<?php
	include 'koneksi.php';

	$query = 'SELECT * FROM siswa ORDER BY id_siswa ASC';
	$result = mysqli_query($koneksi, $query);
	$row = mysqli_fetch_assoc($result);

	while 
?>
<br><br><br>
<div class="perangkingan">
	<h1>Hasil Perhitungan</h1>
</div>