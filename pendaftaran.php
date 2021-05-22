<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&family=Source+Sans+Pro:wght@200&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
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
					<option value="100">< Rp.1.500.000</option>
					<option value="80">Rp.1.500.000 – Rp.3.000.000</option>
					<option value="40">Rp.3.000.001 – Rp.4.500.000</option>
					<option value="20">Rp.4.500.001 – Rp.5.500.000</option>
					<option value="0">> Rp.5.500.000</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Kepemilikan Tempat Tinggal</td>
			<td>:</td>
			<td>
				<select name="kepemilikan">
					<option>--Tempat Tinggal--</option>
					<option value="100">Kontrak</option>
					<option value="75">Bukan Milik Sendiri</option>
					<option value="50">Milik Keluarga Besar</option>
					<option value="25">Milik Sendiri</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Kondisi Tempat Tinggal</td>
			<td>:</td>
			<td>
				<select name="kondisi">
					<option>--Kondisi Tempat Tinggal--</option>
					<option value="100">Non Permanent</option>
					<option value="60">Semi Permanent</option>
					<option value="20">Permanent</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Anggota Keluarga Ditanggung</td>
			<td>:</td>
			<td>
				<select name="anggota">
					<option>--Anggota Ditanggung--</option>
					<option value="100">> 5</option>
					<option value="75">5</option>
					<option value="50">4</option>
					<option value="25">3</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Kepemilikan Kendaraan</td>
			<td>:</td>
			<td>
				<select name="kendaraan">
					<option>--Kendaraan--</option>
					<option value="100">Tidak Punya</option>
					<option value="80">Sepeda</option>
					<option value="40">Motor</option>
					<option value="0">Motor>1</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Kebutuhan Pokok</td>
			<td>:</td>
			<td>
				<select name="kebutuhan">
					<option>--Kebutuhan Pokok--</option>
					<option value="100">Rp.10.000 – Rp.25.000</option>
					<option value="75">Rp.25.001 – Rp.40.000</option>
					<option value="50">Rp.40.001 – Rp.55.000</option>
					<option value="25">> Rp.55.000</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Pembayaran Listrik & PDAM</td>
			<td>:</td>
			<td>
				<select name="pembayaran">
					<option>--Pembayaran--</option>
					<option value="100">< Rp.100.000</option>
					<option value="75">Rp.100.000 – Rp.200.000</option>
					<option value="50">Rp.200.001 – Rp.300.000</option>
					<option value="25">>Rp.300.000</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Jarak Rumah Ke Sekolah</td>
			<td>:</td>
			<td>
				<select name="jarak">
					<option>--Jarak Rumah--</option>
					<option value="100">> 2 km</option>
					<option value="60">1 km – 2 km</option>
					<option value="40">< 1 km</option>
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

		$nama_permohonan = time().'_'.rand(100, 999).'.'.end(explode(".",$_FILES['permohonan']['name']));
		$tipe_permohonan = $_FILES['permohonan']['type'];
        $uk_permohonan = $_FILES['permohonan']['size'];
        $tmp_permohonan = $_FILES['permohonan']['tmp_name'];
        $er_permohonan = $_FILES['permohonan']['error'];

		$nama_kk = time().'_'.rand(100, 999).'.'.end(explode(".",$_FILES['kk']['name']));
		$tipe_kk = $_FILES['kk']['type'];
        $uk_kk = $_FILES['kk']['size'];
        $tmp_kk = $_FILES['kk']['tmp_name'];
        $er_kk = $_FILES['kk']['error'];

		$nama_sktm = time().'_'.rand(100, 999).'.'.end(explode(".",$_FILES['sktm']['name']));
		$tipe_sktm = $_FILES['sktm']['type'];
        $uk_sktm = $_FILES['sktm']['size'];
        $tmp_sktm = $_FILES['sktm']['tmp_name'];
        $er_sktm = $_FILES['sktm']['error'];

		$nama_tempat_tinggal = time().'_'.rand(100, 999).'.'.end(explode(".",$_FILES['tempat_tinggal']['name']));
		$tipe_tempat_tinggal = $_FILES['tempat_tinggal']['type'];
        $uk_tempat_tinggal = $_FILES['tempat_tinggal']['size'];
        $tmp_tempat_tinggal = $_FILES['tempat_tinggal']['tmp_name'];
        $er_tempat_tinggal = $_FILES['tempat_tinggal']['error'];

		$extensi = ['pdf'];
        $ext_permohonan = pathinfo($nama_permohonan, PATHINFO_EXTENSION);
        $ext_kk = pathinfo($nama_kk, PATHINFO_EXTENSION);
        $ext_sktm = pathinfo($nama_sktm, PATHINFO_EXTENSION);
        $ext_tempat_tinggal = pathinfo($nama_tempat_tinggal, PATHINFO_EXTENSION);
        $lokasi = "dokumen/";
        $save = "dokumen/";

		// if($er_permohonan === 4) {
        //     header("location:user.php?page=pendaftaran&stat=input_null");
        // } elseif(!in_array($ext_permohonan, $extensi)) {
        //     header("location:user.php?page=pendaftaran&stat=file_ext");
        // } else {
        //     if($uk_permohonan < 5000000){
        //         move_uploaded_file($tmp_permohonan, $lokasi.$nama_permohonan);
        //         move_uploaded_file($tmp_kk, $lokasi.$nama_kk);
        //         move_uploaded_file($tmp_sktm, $lokasi.$nama_sktm);
        //         move_uploaded_file($tmp_tempat_tinggal, $lokasi.$nama_tempat_tinggal);
        //         $kirim = "INSERT INTO siswa (nik, nama_lengkap, jenis_kelamin, penghasilan, kepemilikan, kondisi, anggota, kendaraan,kebutuhan, pembayaran, jarak, alamat, file_permohonan, file_kk, file_sktm, file_tinggal) VALUES ('$nik','$nama_lengkap','$jenis_kelamin','$penghasilan','$kepemilikan','$kondisi','$anggota','$kendaraan','$kebutuhan','$pembayaran','$jarak','$alamat','$save$nama_permohonan','$save$nama_kk','$save$nama_sktm','$save$nama_tempat_tinggal')"; 
		// 		$result = mysqli_query($koneksi, $kirim);
        //         if($result){
        //             header("location:user.php?page=pendaftaran&stat=input_success");
        //         }else{
        //             header("location:user.php?page=pendaftaran&stat=input_failed");
        //         }
        //     }else{
        //         header("location:user.php?page=pendaftaran&stat=size_file_too_large");
        //     }
        // }

		move_uploaded_file($tmp_permohonan, $lokasi.$nama_permohonan);
		move_uploaded_file($tmp_kk, $lokasi.$nama_kk);
		move_uploaded_file($tmp_sktm, $lokasi.$nama_sktm);
		move_uploaded_file($tmp_tempat_tinggal, $lokasi.$nama_tempat_tinggal);

		$rpenghasilan = (100*(((double)$penghasilan-0)/(100-0)))*0.228;
		$rkepemilikan = (100*(((double)$kepemilikan-25)/(100-25)))*0.2;
		$rkondisi = (100*(((double)$kondisi-20)/(100-20)))*0.2;
		$ranggota = (100*(((double)$anggota-25)/(100-25)))*0.115;
		$rkendaraan = (100*(((double)$kendaraan-0)/(100-0)))*0.057;
		$rkebutuhan = (100*(((double)$kebutuhan-25)/(100-25)))*0.057;
		$rpembayaran = (100*(((double)$pembayaran-25)/(100-25)))*0.086;
		$rjarak = (100*(((double)$jarak-40)/(100-40)))*0.057;
		$total = $rpenghasilan+$rkepemilikan+$rkondisi+$ranggota+$rkendaraan+$rkebutuhan+$rpembayaran+$rjarak;

		$kirim = "INSERT INTO siswa (nik, nama_lengkap, jenis_kelamin, penghasilan, kepemilikan, kondisi, anggota, kendaraan,kebutuhan, pembayaran, jarak, alamat, file_permohonan, file_kk, file_sktm, file_tinggal) VALUES ('$nik','$nama_lengkap','$jenis_kelamin','$penghasilan','$kepemilikan','$kondisi','$anggota','$kendaraan','$kebutuhan','$pembayaran','$jarak','$alamat','$save$nama_permohonan','$save$nama_kk','$save$nama_sktm','$save$nama_tempat_tinggal'); 
			INSERT INTO rank (nik, penghasilan, kepemilikan, kondisi, anggota, kendaraan, kebutuhan, pembayaran, jarak, total) VALUES ('$nik', '$rpenghasilan', '$rkepemilikan', '$rkondisi', '$ranggota', '$rkendaraan', '$rkebutuhan', '$rpembayaran', '$rjarak', '$total')";
		$result = mysqli_multi_query($koneksi, $kirim);

		if (!$result) {
			die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
		} else {
			echo "<script>alert('Data Berhasil Disimpan!');window.location='user.php?page=pendaftaran'</script>";
		}
	}

?>
