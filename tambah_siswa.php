<!DOCTYPE html>
<html>
<head>
	<title>SPK Penerimaan Beasiswa</title>
	<style type="text/css">
		* {
			font-family: 
		}
		.tambah_siswa h1 {
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
	<div class="tambah_siswa">
		<h1>Tambah Siswa</h1>
	</div>
	<form method="POST">
		<section class="base">
			<div>
				<label>NIK</label>
				<input type="text" name="nik" autofocus="" required="" />
			</div>
			<div>
				<label>Nama Lengkap</label>
				<input type="text" name="nama_lengkap" required="" />
			</div>
			<div>
				<label>Jenis Kelamin</label>
				<select name="jenis_kelamin" required="">
						<option value="laki-laki">Laki-Laki</option>
						<option value="perempuan">Perempuan</option>
				</select>
			</div>
			<div>
				<label>Penghasilan Orang Tua</label>
				<select name="penghasilan" required="">
					<option>--Pilih Penghasilan--</option>
					<option value="100">< Rp.1.500.000</option>
					<option value="80">Rp.1.500.000 – Rp.3.000.000</option>
					<option value="40">Rp.3.000.001 – Rp.4.500.000</option>
					<option value="20">Rp.4.500.001 – Rp.5.500.000</option>
					<option value="0">> Rp.5.500.000</option>
				</select>
			</div>
			<div>
				<label>Kepemilkan Tempat Tinggal</label>
				<select name="kepemilikan" required="">
					<option>--Tempat Tinggal--</option>
					<option value="100">Kontrak</option>
					<option value="75">Bukan Milik Sendiri</option>
					<option value="50">Milik Keluarga Besar</option>
					<option value="25">Milik Sendiri</option>
				</select>
			</div>
			<div>
				<label>Kondisi Tempat Tinggal</label>
				<select name="kondisi" required="">
					<option>--Kondisi Tempat Tinggal--</option>
					<option value="100">Non Permanent</option>
					<option value="60">Semi Permanent</option>
					<option value="20">Permanent</option>
				</select>
			</div>
			<div>
				<label>Anggota Keluarga Ditanggung</label>
				<select name="anggota" required="">
					<option>--Anggota Ditanggung--</option>
					<option value="100">> 5</option>
					<option value="75">5</option>
					<option value="50">4</option>
					<option value="25">3</option>
				</select>
			</div>
			<div>
				<label>Kepemilikan Kendaraan</label>
				<select name="kendaraan" required="">
					<option>--Kendaraan--</option>
					<option value="100">Tidak Punya</option>
					<option value="80">Sepeda</option>
					<option value="40">Motor</option>
					<option value="0">Motor>1</option>
				</select>
			</div>
			<div>
				<label>Kebutuhan Pokok</label>
				<select name="kebutuhan" required="">
					<option>--Kebutuhan Pokok--</option>
					<option value="100">Rp.10.000 – Rp.25.000</option>
					<option value="75">Rp.25.001 – Rp.40.000</option>
					<option value="50">Rp.40.001 – Rp.55.000</option>
					<option value="25">> Rp.55.000</option>
				</select>
			</div>
			<div>
				<label>Pembayaran Listrik & PDAM</label>
				<select name="pembayaran" required="">
					<option>--Pembayaran--</option>
					<option value="100">< Rp.100.000</option>
					<option value="75">Rp.100.000 – Rp.200.000</option>
					<option value="50">Rp.200.001 – Rp.300.000</option>
					<option value="25">>Rp.300.000</option>
				</select>
			</div>
			<div>
				<label>Jarak Rumah Ke Sekolah</label>
				<select name="jarak" required="">
					<option>--Jarak Rumah--</option>
					<option value="100">> 2 km</option>
					<option value="60">1 km – 2 km</option>
					<option value="40">< 1 km</option>
				</select>
			</div>
			<div>
				<button type="submit" name="kirim">Simpan Data</button>
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

			$rpenghasilan = (100*(((double)$penghasilan-0)/(100-0)))*0.228;
			$rkepemilikan = (100*(((double)$kepemilikan-25)/(100-25)))*0.2;
			$rkondisi = (100*(((double)$kondisi-20)/(100-20)))*0.2;
			$ranggota = (100*(((double)$anggota-25)/(100-25)))*0.115;
			$rkendaraan = (100*(((double)$kendaraan-0)/(100-0)))*0.057;
			$rkebutuhan = (100*(((double)$kebutuhan-25)/(100-25)))*0.057;
			$rpembayaran = (100*(((double)$pembayaran-25)/(100-25)))*0.086;
			$rjarak = (100*(((double)$jarak-40)/(100-40)))*0.057;
			$total = $rpenghasilan+$rkepemilikan+$rkondisi+$ranggota+$rkendaraan+$rkebutuhan+$rpembayaran+$rjarak;

			$kirim = "INSERT INTO siswa (nik, nama_lengkap, jenis_kelamin, penghasilan, kepemilikan, kondisi, anggota, kendaraan, kebutuhan, pembayaran, jarak) VALUES ('$nik', '$nama_lengkap', '$jenis_kelamin', '$penghasilan', '$kepemilikan', '$kondisi', '$anggota', '$kendaraan', '$kebutuhan', '$pembayaran', '$jarak'); 
				INSERT INTO rank (nik, penghasilan, kepemilikan, kondisi, anggota, kendaraan, kebutuhan, pembayaran, jarak, total) VALUES ('$nik', '$rpenghasilan', '$rkepemilikan', '$rkondisi', '$ranggota', '$rkendaraan', '$rkebutuhan', '$rpembayaran', '$rjarak', '$total')";
			$result = mysqli_multi_query($koneksi, $kirim);

			if (!$result) {
				die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
			} else {
				echo "<script>alert('Data Berhasil Disimpan!');window.location='admin.php?page=siswa'</script>";
			}
		}

	?>

</body>
</html>