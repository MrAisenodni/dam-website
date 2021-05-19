<?php
include 'koneksi.php';

	if(isset($_GET['id_siswa'])) {
		$id_siswa = $_GET['id_siswa'];
		$query = "SELECT * FROM siswa WHERE id_siswa = '$id_siswa'";
		$result = mysqli_query($koneksi, $query);
		if(!$result) {
			die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
		}
		$data = mysqli_fetch_assoc($result);

		if(!count($data)) {
			echo "<script>alert('Data Tidak Ditemukan!');window.location='home.php?page=siswa'</script>";
		}
	} else {
		echo "<script>alert('Masukkan Kode yang ingin di edit');window.location='home.php?page=siswa'</script>";
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
		.edit_siswa h1 {
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
		select {
			padding: 6px;
			width: 100%;
			box-sizing: border-box;
			outline-color: #95afc0;
		}
		button {
			border-radius: 8px;
			background-color: #579DAE;
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
	<div class="edit_siswa">
		<h1>Edit <?php echo $data['nama_lengkap']; ?></h1>
	</div>
	<form method="POST">
		<section class="base">
			<div>
				<label>NIK</label>
				<input type="text" name="nik" autofocus="" required="" value="<?php echo $data['nik']; ?>" />
				<input type="hidden" name="id_siswa" value="<?php echo $data['id_siswa']; ?>">
			</div>
			<div>
				<label>Nama Lengkap</label>
				<input type="text" name="nama_lengkap" required="" value="<?php echo $data['nama_lengkap']; ?>" />
			</div>
			<div>
				<label>Jenis Kelamin</label>
				<select name="jenis_kelamin" required="" value="<?php echo $data['jenis_kelamin']; ?>" />
					<option value="laki-laki">Laki-Laki</option>
					<option value="perempuan">Perempuan</option>
				</select>
			</div>
			<div>
				<label>Penghasilan Orang Tua</label>
				<select name="penghasilan" required="">
				<?php if($data['penghasilan'] == '100') { ?>
					<option value="100">< Rp.1.500.000</option>
					<option value="80">Rp.1.500.000 – Rp.3.000.000</option>
					<option value="40">Rp.3.000.001 – Rp.4.500.000</option>
					<option value="20">Rp.4.500.001 – Rp.5.500.000</option>
					<option value="0">> Rp.5.500.000</option>
				<?php } elseif($data['penghasilan'] == '80') { ?>
					<option value="80">Rp.1.500.000 – Rp.3.000.000</option>
					<option value="100">< Rp.1.500.000</option>
					<option value="80">Rp.1.500.000 – Rp.3.000.000</option>
					<option value="40">Rp.3.000.001 – Rp.4.500.000</option>
					<option value="20">Rp.4.500.001 – Rp.5.500.000</option>
					<option value="0">> Rp.5.500.000</option>
				<?php } elseif($data['penghasilan'] == '40') { ?>
					<option value="40">Rp.3.000.001 – Rp.4.500.000</option>
					<option value="100">< Rp.1.500.000</option>
					<option value="80">Rp.1.500.000 – Rp.3.000.000</option>
					<option value="40">Rp.3.000.001 – Rp.4.500.000</option>
					<option value="20">Rp.4.500.001 – Rp.5.500.000</option>
					<option value="0">> Rp.5.500.000</option>
				<?php } elseif($data['penghasilan'] == '20') { ?>
					<option value="20">Rp.4.500.001 – Rp.5.500.000</option>
					<option value="100">< Rp.1.500.000</option>
					<option value="80">Rp.1.500.000 – Rp.3.000.000</option>
					<option value="40">Rp.3.000.001 – Rp.4.500.000</option>
					<option value="20">Rp.4.500.001 – Rp.5.500.000</option>
					<option value="0">> Rp.5.500.000</option>
				<?php } elseif($data['penghasilan'] == '0') { ?>
					<option value="0">> Rp.5.500.000</option>
					<option value="100">< Rp.1.500.000</option>
					<option value="80">Rp.1.500.000 – Rp.3.000.000</option>
					<option value="40">Rp.3.000.001 – Rp.4.500.000</option>
					<option value="20">Rp.4.500.001 – Rp.5.500.000</option>
					<option value="0">> Rp.5.500.000</option>
				<?php } ?>
				</select>
			</div>
			<div>
				<label>Kepemilkan Tempat Tinggal</label>
				<select name="kepemilikan" required="">
				<?php if($data['kepemilikan'] == '100') { ?>
					<option value="100">Kontrak</option>
					<option value="75">Bukan Milik Sendiri</option>
					<option value="50">Milik Keluarga Besar</option>
					<option value="25">Milik Sendiri</option>
				<?php } elseif($data['kepemilikan'] == '75') { ?>
					<option value="75">Bukan Milik Sendiri</option>
					<option value="100">Kontrak</option>
					<option value="50">Milik Keluarga Besar</option>
					<option value="25">Milik Sendiri</option>
				<?php } elseif($data['kepemilikan'] == '50') { ?>
					<option value="50">Milik Keluarga Besar</option>
					<option value="100">Kontrak</option>
					<option value="75">Bukan Milik Sendiri</option>
					<option value="25">Milik Sendiri</option>
				<?php } elseif($data['kepemilikan'] == '25') { ?>
					<option value="25">Milik Sendiri</option>
					<option value="100">Kontrak</option>
					<option value="75">Bukan Milik Sendiri</option>
					<option value="50">Milik Keluarga Besar</option>
				<?php } ?>
				</select>
			</div>
			<div>
				<label>Kondisi Tempat Tinggal</label>
				<select name="kondisi" required="">
				<?php if($data['kondisi'] == '100') { ?>
					<option value="100">Non Permanent</option>
					<option value="60">Semi Permanent</option>
					<option value="20">Permanent</option>
				<?php } elseif($data['kondisi'] == '60') { ?>
					<option value="60">Semi Permanent</option>
					<option value="100">Non Permanent</option>
					<option value="20">Permanent</option>
				<?php } elseif($data['kondisi'] == '20') { ?>
					<option value="20">Permanent</option>
					<option value="100">Non Permanent</option>
					<option value="60">Semi Permanent</option>
				<?php } ?>
				</select>
			</div>
			<div>
				<label>Anggota Keluarga Ditanggung</label>
				<select name="anggota" required="">
					<option value="100">> 5</option>
					<option value="75">5</option>
					<option value="50">4</option>
					<option value="25">3</option>
				</select>
			</div>
			<div>
				<label>Kepemilikan Kendaraan</label>
				<select name="kendaraan" required="">
				<?php if($data['kondisi'] == '100') { ?>
					<option value="100">Tidak Punya</option>
					<option value="80">Sepeda</option>
					<option value="40">Motor</option>
					<option value="0">Motor>1</option>
				<?php } elseif($data['kondisi'] == '80') { ?>
					<option value="80">Sepeda</option>
					<option value="100">Tidak Punya</option>
					<option value="40">Motor</option>
					<option value="0">Motor>1</option>
				<?php } elseif($data['kondisi'] == '40') { ?>
					<option value="40">Motor</option>
					<option value="100">Tidak Punya</option>
					<option value="80">Sepeda</option>
					<option value="0">Motor>1</option>
				<?php } elseif($data['kondisi'] == '0') { ?>
					<option value="0">Motor>1</option>
					<option value="100">Tidak Punya</option>
					<option value="80">Sepeda</option>
					<option value="40">Motor</option>
				<?php } ?>
				</select>
			</div>
			<div>
				<label>Kebutuhan Pokok</label>
				<select name="kebutuhan" required="">
				<?php if($data['kebutuhan'] == '100') { ?>
					<option value="100">Rp.10.000 – Rp.25.000</option>
					<option value="75">Rp.25.001 – Rp.40.000</option>
					<option value="50">Rp.40.001 – Rp.55.000</option>
					<option value="25">> Rp.55.000</option>
				<?php } elseif($data['kebutuhan'] == '75') { ?>
					<option value="75">Rp.25.001 – Rp.40.000</option>
					<option value="100">Rp.10.000 – Rp.25.000</option>
					<option value="50">Rp.40.001 – Rp.55.000</option>
					<option value="25">> Rp.55.000</option>
				<?php } elseif($data['kebutuhan'] == '50') { ?>
					<option value="50">Rp.40.001 – Rp.55.000</option>
					<option value="100">Rp.10.000 – Rp.25.000</option>
					<option value="75">Rp.25.001 – Rp.40.000</option>
					<option value="25">> Rp.55.000</option>
				<?php } elseif($data['kebutuhan'] == '25') { ?>
					<option value="25">> Rp.55.000</option>
					<option value="100">Rp.10.000 – Rp.25.000</option>
					<option value="75">Rp.25.001 – Rp.40.000</option>
					<option value="50">Rp.40.001 – Rp.55.000</option>
				<?php } ?>
				</select>
			</div>
			<div>
				<label>Pembayaran Listrik & PDAM</label>
				<select name="pembayaran" required="">
				<?php if($data['kebutuhan'] == '100') { ?>
					<option value="100">< Rp.100.000</option>
					<option value="75">Rp.100.000 – Rp.200.000</option>
					<option value="50">Rp.200.001 – Rp.300.000</option>
					<option value="25">>Rp.300.000</option>
				<?php } elseif($data['kebutuhan'] == '75') { ?>
					<option value="75">Rp.100.000 – Rp.200.000</option>
					<option value="100">< Rp.100.000</option>
					<option value="50">Rp.200.001 – Rp.300.000</option>
					<option value="25">>Rp.300.000</option>
				<?php } elseif($data['kebutuhan'] == '50') { ?>
					<option value="50">Rp.200.001 – Rp.300.000</option>
					<option value="100">< Rp.100.000</option>
					<option value="75">Rp.100.000 – Rp.200.000</option>
					<option value="25">>Rp.300.000</option>
				<?php } elseif($data['kebutuhan'] == '25') { ?>
					<option value="25">>Rp.300.000</option>
					<option value="100">< Rp.100.000</option>
					<option value="75">Rp.100.000 – Rp.200.000</option>
					<option value="50">Rp.200.001 – Rp.300.000</option>
				<?php } ?>
				</select>
			</div>
			<div>
				<label>Jarak Rumah Ke Sekolah</label>
				<select name="jarak" required="">
				<?php if($data['kebutuhan'] == '100') { ?>
					<option value="100">> 2 km</option>
					<option value="60">1 km – 2 km</option>
					<option value="40">< 1 km</option>
				<?php } elseif($data['kebutuhan'] == '60') { ?>
					<option value="60">1 km – 2 km</option>
					<option value="100">> 2 km</option>
					<option value="40">< 1 km</option>
				<?php } elseif($data['kebutuhan'] == '40') { ?>
					<option value="40">< 1 km</option>
					<option value="100">> 2 km</option>
					<option value="60">1 km – 2 km</option>
				<?php } ?>
				</select>
			</div>
			<div>
				<button type="submit" name="kirim">Simpan Perubahan</button>
				<button><a href="admin.php?page=siswa" style="text-decoration: none; color: white;">Kembali</a></button>
			</div>
		</section>
	</form>
	<?php
	include ('koneksi.php');

		if (isset($_POST['kirim'])) {
			$nik = $_POST['nik'];
			$nama_lengkap = $_POST['nama_lengkap'];
			$jenis_kelamin = $_POST['jenis_kelamin'];
			$penghasilan = $_POST['penghasilan'];
			$kepemilikan = $_POST['kepemilikan'];
			$kondisi = $_POST['kondisi'];
			$anggota = $_POST['anggota'];
			$kendaraan = $_POST['kendaraan'];
			$kebutuhan = $_POST['kebutuhan'];
			$pembayaran = $_POST['pembayaran'];
			$jarak = $_POST['jarak'];

			$kirim = "UPDATE siswa SET nik = '$nik', nama_lengkap = '$nama_lengkap', jenis_kelamin = '$jenis_kelamin', penghasilan = '$penghasilan', kepemilikan = '$kepemilikan', kondisi = '$kondisi', anggota = '$anggota', kendaraan = '$kendaraan', kebutuhan = '$kebutuhan', pembayaran = '$pembayaran', jarak = '$jarak'";
			$kirim .= "WHERE id_siswa = '$id_siswa'";
			$result = mysqli_query($koneksi, $kirim);

			if (!$result) {
				die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
			} else {
				echo "<script>alert('Data Berhasil Diubah!');window.location='home.php?page=siswa'</script>";
			}
		}

	?>

</body>
</html>