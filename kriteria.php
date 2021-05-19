<?php
include 'koneksi.php';
?>
<br><br><br>
<div class="kriteria">
	<h1>Kriteria</h1>
</div>
<style type="text/css">
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
		font-size: 15px;
		background: #f9f9f9;
		border: 1px solid #ddeeee;
		text-align: center;
		color: #333;
		padding: 10px;
	}

	.action_kriteria a {
		background-color: #89B5C8;
		border-radius: 10px;
		text-decoration: none;
		color: #fff;
		padding: 10px;
		font-size: 12px;
	}

	.action_kriteria a:hover {
		background: #4594B8;
		transition: 0.3s;
		transition-property: background;
	}

</style>
<div class="tambah_kriteria">
	<a href="tambah_kriteria.php">+ &nbsp; Tambah Kriteria</a>
</div>
<table style="margin-left: 25%;">
	<thead>
		<tr>
			<th>No.</th>
			<th>Kode Kriteria</th>
			<th>Nama Kriteria</th>
			<th>Bobot Kriteria</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$query = "SELECT * FROM kriteria ORDER BY id_kriteria ASC";
			$result = mysqli_query($koneksi, $query);

			if(!$result) {
				die("Query error : ".mysqli_errno($koneksi))." - ".mysqli_error($koneksi);
			}
			$no = 1;

			while ($row = mysqli_fetch_assoc($result)) {
			
		?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $row['kd_kriteria'] ?></td>
			<td><a href="?page=subkriteria&id=<?php echo $row['id_kriteria']; ?>"><?php echo $row['nama_kriteria'] ?></a></td>
			<td><?php echo $row['bobot_kriteria'] ?></td>
		</tr>
		<?php
			$no++;
		}
		?>
	</tbody>	
</table>