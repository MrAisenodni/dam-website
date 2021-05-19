<!DOCTYPE html>
<html>
<head>
	<title>SPK Penerimaan Beasiswa</title>
	<style type="text/css">
		* {
			font-family: 
		}
		.tambah_subkriteria h1 {
			color: grey;
			text-align: center;
		}

		.base {
			width: 400px;
			padding: 20px;
			margin-left: auto;
			margin-right: auto;
			background-color: #a4b0be;
			border-radius: 2px;

		}
		label {
			color: white;
			margin-top: 10px;
			float: left;
			text-align: left;
			width: 100%;
		}
		input {
			padding: 6px;
			width: 100%;
			box-sizing: border-box;
			outline-color: #95afc0;
		}
		button {
			background-color: #579DAE;
			color: #fff;
			padding: 10px;
			border-radius: 8px;
			font-size: 12px;
			border: 1px solid;
			margin-top: 20px;
		}
		button:hover {
			background-color: #3E7988;
			transition: 0.3s;
		}
	</style>
</head>
<body>
	<div class="tambah_subkriteria">
		<h1>Tambah Subkriteria</h1>
	</div>
	<form method="POST" action="">
	<section class="base">
		<div>
			<label>Nama Kriteria</label>
			<input type="text" name="nama_kriteria" autofocus="" required="" />
		</div>
		<div>
			<label>Subkriteria</label>
			<input type="text" name="nama_subkriteria" autofocus="" required="" />
		</div>
		<div>
			<label>Bobot Subkriteria</label>
			<input type="text" name="bobot_subkriteria" required="" />
		</div>
		<div>
			<button type="submit" name="kirim">Simpan Subkriteria</button>
			<a href="kriteria.php"></a>
		</div>
	</section>
	</form>
	<?php
	include ('koneksi.php');
		if (isset($_POST['kirim'])) {
			$nama_kriteria = $_POST['nama_kriteria'];
			$nama_subkriteria = $_POST['nama_subkriteria'];
			$bobot_subkriteria = $_POST['bobot_subkriteria'];

			$kirim = "INSERT INTO subkriteria (nama_kriteria, nama_subkriteria, bobot_subkriteria) VALUES ('$nama_kriteria', '$nama_subkriteria', '$bobot_subkriteria')";
			$result = mysqli_query($koneksi, $kirim);

			if (!$result) {
				die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
			} else {
				echo "<script>alert('Data Berhasil Disimpan!');window.location='admin.php?page=subkriteria'</script>";
			}
		}
	?>

</body>
</html>