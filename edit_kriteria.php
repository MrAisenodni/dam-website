<?php
include 'koneksi.php';

	if(isset($_GET['id_kriteria'])) {
		$id_kriteria = $_GET['id_kriteria'];
		$query = "SELECT * FROM kriteria WHERE id_kriteria = '$id_kriteria'";
		$result = mysqli_query($koneksi, $query);
		if(!$result) {
			die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
		}
		$data = mysqli_fetch_assoc($result);

		if(!count($data)) {
			echo "<script>alert('Data Tidak Ditemukan!');window.location='home.php?page=kriteria'</script>";
		}
	} else {
		echo "<script>alert('Masukkan Kode yang ingin di edit');window.location='home.php?page=kriteria'</script>";
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
		.edit_kriteria h1 {
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
			border-radius: 5px;
			color: #fff;
			padding: 10px;
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
	<div class="edit_kriteria">
		<h1>Edit Kriteria <?php echo $data['kd_kriteria']; ?></h1>
	</div>
	<form method="POST" action="">
	<section class="base">
		<div>
			<label>Kode Kriteria</label>
			<input type="text" name="kd_kriteria" autofocus="" required="" value="<?php echo $data['kd_kriteria']; ?>" readonly/>
			<input type="hidden" name="id_kriteria" value="<?php echo $data['id_kriteria']; ?>">
		</div>
		<div>
			<label>Nama Kriteria</label>
			<input type="text" name="nama_kriteria" required="" value="<?php echo $data['nama_kriteria']; ?>" />
		</div>
		<div>
			<label>Bobot Kriteria</label>
			<input type="text" name="bobot_kriteria" required="" value="<?php echo $data['bobot_kriteria']; ?>" />
		</div>
		<div>
			<button type="submit" name="kirim">Simpan Perubahan</button>
			<a href="kriteria.php"></a>
		</div>
	</section>
	</form>
	<?php
	include ('koneksi.php');

		if (isset($_POST['kirim'])) {
			$nama_kriteria = $_POST['nama_kriteria'];
			$bobot_kriteria = $_POST['bobot_kriteria'];

			$kirim = "UPDATE kriteria SET nama_kriteria = '$nama_kriteria', bobot_kriteria = '$bobot_kriteria'";
			$kirim .= "WHERE id_kriteria = '$id_kriteria'";
			$result = mysqli_query($koneksi, $kirim);

			if (!$result) {
				die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
			} else {
				echo "<script>alert('Data Berhasil Diubah!');window.location='admin.php?page=kriteria'</script>";
			}
		}

	?>	

</body>
</html>