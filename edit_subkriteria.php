<?php
include 'koneksi.php';

	if(isset($_GET['id_subkriteria'])) {
		$id_subkriteria = $_GET['id_subkriteria'];
		$query = "SELECT * FROM subkriteria WHERE id_subkriteria = '$id_subkriteria'";
		$result = mysqli_query($koneksi, $query);
		if(!$result) {
			die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
		}
		$data = mysqli_fetch_assoc($result);

		if(!count($data)) {
			echo "<script>alert('Data Tidak Ditemukan!');window.location='home.php?page=subkriteria'</script>";
		}
	} else {
		echo "<script>alert('Masukkan Kode yang ingin di edit');window.location='home.php?page=subkriteria'</script>";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>SPK Penerimaan Beasiswa</title>
		<style type="text/css">
		* {
			font-family: 
		}
		.edit_subkriteria h1 {
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
	<div class="edit_subkriteria">
		<h1>Edit Sub Kriteria <?php echo $data['nama_kriteria']; ?> </h1>
	</div>
	<form method="POST" action="">
	<section class="base">
		<div>
			<label>Nama Kriteria</label>
			<input type="text" name="nama_kriteria" autofocus="" required="" value="<?php echo $data['nama_kriteria']; ?> " readonly />
		</div>
		<div>
			<label>Sub Kriteria</label>
			<input type="text" name="nama_subkriteria" autofocus="" required="" value="<?php echo $data['nama_subkriteria']; ?> " />
		</div>
		<div>
			<label>Bobot Subkriteria</label>
			<input type="text" name="bobot_subkriteria" required="" value="<?php echo $data['bobot_subkriteria']; ?> " />
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

			$kirim = "UPDATE subkriteria SET nama_kriteria = '$nama_kriteria', nama_subkriteria = '$nama_subkriteria', bobot_subkriteria = '$bobot_subkriteria'";
			$kirim .= "WHERE id_subkriteria = '$id_subkriteria'";
			$result = mysqli_query($koneksi, $kirim);

			if (!$result) {
				die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
			} else {
				echo "<script>alert('Data Berhasil Diubah!');window.location='admin.php?page=subkriteria'</script>";
			}
		}
	?>	

</body>
</html>