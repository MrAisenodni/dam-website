<?php
include 'koneksi.php';

	if(isset($_GET['id_rank'])) {
		$id_rank = $_GET['id_rank'];
		$query = "SELECT a.nik, b.nama_lengkap, b.jenis_kelamin, a.penghasilan, a.kepemilikan, a.kondisi, a.anggota, a.kendaraan, a.kebutuhan, a.pembayaran, a.jarak, a.total FROM rank a JOIN siswa b ON a.nik = b.nik WHERE a.id_rank = '$id_rank'";
		// $query = "SELECT * FROM rank a JOIN siswa b ON a.nik = b.nik WHERE a.id_rank = '$id_siswa'";
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
		.detail_rank h1 {
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
	<div class="detail_rank">
		<h1>Detail <?php echo $data['nama_lengkap']; ?></h1>
	</div>
	<form method="" action="">
        <section class="base">
            <div>
                <label>NIK</label>
                <input type="text" name="nik" autofocus="" disabled value="<?php echo $data['nik']; ?>" />
            </div>
            <div>
                <label>Nama Lengkap</label>
                <input type="text" name="nama_lengkap" disabled value="<?php echo $data['nama_lengkap']; ?>" />
            </div>
            <div>
                <label>Jenis Kelamin</label>
                <input type="text" name="nama_lengkap" disabled value="<?php echo $data['jenis_kelamin']; ?>" />
            </div>
            <div>
                <label>Penghasilan Orang Tua</label>
                <input type="text" name="penghasilan" disabled value="<?php echo $data['penghasilan']; ?>" />
            </div>
            <div>
                <label>Kepemilkan Tempat Tinggal</label>
                <input type="text" name="kepemilikan" disabled value="<?php echo $data['kepemilikan']; ?>" />
            </div>
            <div>
                <label>Kondisi Tempat Tinggal</label>
                <input type="text" name="kondisi" disabled value="<?php echo $data['kondisi']; ?>" />
            </div>
            <div>
                <label>Anggota Keluarga Ditanggung</label>
                <input type="text" name="anggota" disabled value="<?php echo $data['anggota']; ?>" />
            </div>
            <div>
                <label>Kepemilikan Kendaraan</label>
                <input type="text" name="kendaraan" disabled value="<?php echo $data['kendaraan']; ?>" />
            </div>
            <div>
                <label>Kebutuhan Pokok</label>
                <input type="text" name="kebutuhan" disabled value="<?php echo $data['kebutuhan']; ?>" />
            </div>
            <div>
                <label>Pembayaran Listrik & PDAM</label>
                <input type="text" name="pembayaran" disabled value="<?php echo $data['pembayaran']; ?>" />
            </div>
            <div>
                <label>Jarak Rumah Ke Sekolah</label>
                <input type="text" name="jarak" disabled value="<?php echo $data['jarak']; ?>" />
            </div>
            <div>
                <label>Total</label>
                <input type="text" name="total" disabled value="<?php echo $data['total']; ?>" />
            </div>
            <div>
                <button><a href="admin.php?page=ranking" style="text-decoration: none; color: white;">Kembali</a></button>
            </div>
        </section>
	</form>
</body>
</html>