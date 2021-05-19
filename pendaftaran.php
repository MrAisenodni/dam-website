<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
<br><br><br>
<div class="formulir">
	<h1>Formulir Pendaftaran</h1>
</div>
<style type="text/css">
	form {
  		background: #f9f9f9;
  		border: 2px solid #c1c1c1;
  		margin-top: 15px;
  		margin-bottom: 10px;
  		max-width: 600px;
  		margin-left: 28%;
  		padding: 0.5em;
  		border-radius: 10px;
  		font-family: 'Roboto', sans-serif;
	}

	table {
		padding-top: 10px;
		margin-left: 15%;
		font-size: 16px;
	}

	table td{
		padding-bottom: 5px;
	}

	form input {
		width: 100%;
	}

	form input:focus {
  		outline: 3px solid #95afc0;
	}

	form textarea {
		width: 100%;
	}

	form textarea:focus {
		outline: 3px solid #95afc0;
	}

	form select {
  		width: 100%;
  		margin-bottom: 0.5rem;
	}

	form select:focus {
  		outline: 3px solid #95afc0;
	}

	form button:hover {
		transition: 0.3s;
  		background: #95afc0;
  		color: white;
	}

	form select option {
		text-align: center;
	}

	button {
		width: 80%;
	}
</style>
<form action="" method="POST" enctype="multipart/form-data">
	<div class="utama">
		<h2>Data Diri</h2>
	</div>
	<table>
		<tr>
			<td>NIK</td>
			<td>:</td>
			<td><input type="text" name="nik" autofocus="" required=""></td>
		</tr>
		<tr>
			<td>Nama Lengkap</td>
			<td>:</td>
			<td><input type="text" name="nama_lengkap" required=""></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td>
				<select name="jenis_kelamin">
					<option value="laki-laki">Laki-Laki</option>
					<option value="perempuan">Perempuan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><textarea name="alamat" required=""></textarea></td>
		</tr>
		<tr>
			<td>Penghasilan Orang Tua</td>
			<td>:</td>
			<td>
				<select name="penghasilan">
					<option>--Pilih Penghasilan--</option>
					<option>< Rp1.500.000</option>
					<option> Rp1.500.000 - Rp3.000.000</option>
					<option>Rp3.000.001 - Rp4.500.000</option>
					<option>Rp4.500.001 - Rp5.500.000</option>
					<option>> Rp5.500.000</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Kepemilikan Tempat Tinggal</td>
			<td>:</td>
			<td>
				<select name="kepemilikan">
					<option>--Tempat Tinggal--</option>
					<option>Kontrak</option>
					<option>Bukan Milik Sendiri</option>
					<option>Milik Keluarga Besar</option>
					<option>Milik Sendiri</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Kondisi Tempat Tinggal</td>
			<td>:</td>
			<td>
				<select name="kondisi">
					<option>--Kondisi Tempat Tinggal--</option>
					<option>Non Permanent</option>
					<option>Semi Permanent</option>
					<option>Permanent</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Anggota Keluarga Ditanggung</td>
			<td>:</td>
			<td>
				<select name="anggota">
					<option>--Anggota Ditanggung--</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>> 5</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Kepemilikan Kendaraan</td>
			<td>:</td>
			<td>
				<select name="kendaraan">
					<option>--Kendaraan--</option>
					<option>Tidak Punya</option>
					<option>Sepeda</option>
					<option>Motor</option>
					<option>Motor >1</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Kebutuhan Pokok</td>
			<td>:</td>
			<td>
				<select name="kebutuhan">
					<option>--Kebutuhan Pokok--</option>
					<option>Rp10.000 - Rp25.000</option>
					<option>Rp25.001 - Rp40.000</option>
					<option>Rp40.001 - Rp55.000</option>
					<option>> Rp55.000</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Pembayaran Listrik & PDAM</td>
			<td>:</td>
			<td>
				<select name="pembayaran">
					<option>--Pembayaran--</option>
					<option>< Rp100.000</option>
					<option>Rp100.000 - Rp200.000</option>
					<option>Rp200.001 - Rp300.000</option>
					<option>> Rp300.000</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Jarak Rumah Ke Sekolah</td>
			<td>:</td>
			<td>
				<select name="jarak">
					<option>--Jarak Rumah--</option>
					<option>< 1KM</option>
					<option>1 - 2KM</option>
					<option>> 2KM</option>
				</select>
			</td>
		</tr>		
	</table>
	<div class="pendukung">
		<h2>Data Pendukung</h2>
	</div>
	<table>
		<tr>
			<td>Surat Permohonan</td>
			<td>:</td>
			<td><input type="file" name="permohonan"></td>
		</tr>
		<tr>
			<td>Kartu Keluarga</td>
			<td>:</td>
			<td><input type="file" name="kk"></td>
		</tr>
		<tr>
			<td>Surat Keterangan Tidak Mampu</td>
			<td>:</td>
			<td><input type="file" name="sktm"></td>
		</tr>
		<tr>
			<td>Tempat Tinggal</td>
			<td>:</td>
			<td><input type="file" name="tempat_tinggal"></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<button type="submit" name="kirim">Kirim</button>
			</td>
		</tr>
	</table>
</form>

<?php
include ('koneksi.php');
	if (isset($_POST['kirim'])) {
		$nik = $_POST['nik'];
		$nama_lengkap = $_POST['nama_lengkap'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$alamat = $_POST['alamat'];
		$penghasilan = $_POST['penghasilan'];
		$kepemilikan = $_POST['kepemilikan'];
		$kondisi = $_POST['kondisi'];
		$anggota = $_POST['anggota'];
		$kendaraan = $_POST['kendaraan'];
		$kebutuhan = $_POST['kebutuhan'];
		$pembayaran = $_POST['pembayaran'];
		$jarak = $_POST['jarak'];
		$permohonan = $_FILES['permohonan']['name'];
		$kk = $_FILES['kk']['name'];
		$sktm = $_FILES['sktm']['name'];
		$tempat_tinggal = $_FILES['tempat_tinggal']['name'];

		$kirim = "INSERT INTO form_pendaftaran (nik, nama_lengkap, jenis_kelamin, alamat, penghasilan, kepemilikan, kondisi, anggota, kendaraan,kebutuhan, pembayaran, jarak) VALUES ('$nik','$nama_lengkap','$jenis_kelamin','$alamat','$penghasilan','$kepemilikan','$kondisi','$anggota','$kendaraan','$kebutuhan','$pembayaran','$jarak')"; 
		$result = mysqli_query($koneksi, $kirim);

		if (!$result) {
			die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
		} else {
			echo "<script>alert('Data Berhasil Disimpan!');window.location='user.php?page=pendaftaran'</script>";
		}


	}

?>
