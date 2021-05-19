<?php
	include 'koneksi.php';

	if(isset($_GET['id'])) {
		$id = $_GET['id'];
		$query = "SELECT * FROM subkriteria WHERE id_kriteria = '$id'";
		$result = mysqli_query($koneksi, $query);
		
		if(!$result) {
			die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
		}

		$data = mysqli_fetch_assoc($result);

		if(!count($data)) {
			echo "<script>alert('Data Tidak Ditemukan!');window.location='admin.php?page=kriteria'</script>";
		}
	} else {
		echo "<script>alert('Masukkan Kode yang ingin di edit');window.location='admin.php?page=kriteria'</script>";
	}
?>
<br><br><br>
<div class="detail_kriteria">
	<h1><?php echo $data['nama_kriteria'] ?></h1>
</div>

<style type="text/css">
	.detail_kriteria h1 {
		color: grey;
		text-align: center;
	}
	table {
		border: 1px solid;
		border-collapse: collapse;
		border-spacing: 0;
		width: 70%;
		margin: 15px auto 15px auto;
	}

	table thead th {
		font-size: 15px;
		background-color: #ddefef;
		border: 1px solid #ddeeee;
		color: #336b6b;
		padding: 10px;
		text-align: center;
		text-shadow: 1px 1px 1px #fff;
	}

	table tbody td {
		text-align: center;
		font-size: 14px;
		background: #f9f9f9;
		border: 1px solid #ddeeee;
		color: #333;
		padding: 10px;
	}

	.action_subkriteria a {
		background-color: #89B5C8;
		border-radius: 10px;
		text-decoration: none;
		color: #fff;
		padding: 10px;
		font-size: 12px;
	}

	.action_subkriteria a:hover {
		background: #4594B8;
		transition: 0.3s;
	}

</style>
<table style="margin-left: 25%;">
	<thead>
		<tr>
			<th>Subkriteria</th>
			<th>Bobot Subkriteria</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$no = 1;

			while ($data = mysqli_fetch_assoc($result)) {
		?>
		<tr>
			<td><?php echo $data['nama_subkriteria'] ?></td>
			<td><?php echo $data['bobot_subkriteria'] ?></td>
		</tr>
		<?php $no++; } ?>
	</tbody>
</table><br>
<button><a href="admin.php?page=kriteria" style="text-decoration: none; color: white;">Kembali</a></button>