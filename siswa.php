<?php
include 'koneksi.php';
?>
<br><br><br>
<div class="siswa">
	<h1>Nama Siswa</h1>
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
		font-size: 14.5px;
		background-color: #ddefef;
		border: 1px solid #ddeeee;
		color: #336b6b;
		padding: 10px;
		text-align: center;
		text-shadow: 1px 1px 1px #fff;
	}

	table tbody td {
		font-size: 13px;
		background: #f9f9f9;
		border: 1px solid #ddeeee;
		text-align: center;
		color: #333;
		padding: 10px;
	}

	.action_siswa a {
		background-color: #89B5C8;
		border-radius: 10px;
		text-decoration: none;
		color: #fff;
		padding: 10px;
		font-size: 12px;
	}

	.action_siswa a:hover {
		background: #4594B8;
		transition: 0.3s;
	}

</style>
<div class="tambah_siswa">
	<a href="tambah_siswa.php">+ &nbsp; Tambah Siswa</a>
</div>
<table style="margin-left: 25%;">
	<thead>
		<tr>
			<th>No.</th>
			<th>NIK</th>
			<th>Nama Lengkap</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$query = "SELECT * FROM siswa ORDER BY id_siswa ASC";
			$result = mysqli_query($koneksi, $query);

			if(!$result) {
				die("Query error : ".mysqli_errno($koneksi))." - ".mysqli_error($koneksi);
			}
			$no = 1;

			while ($row = mysqli_fetch_assoc($result)) {
			
		?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $row['nik'] ?></td>
			<td><?php echo $row['nama_lengkap'] ?></td>d>
			<td>
				<div class="action_siswa">
					<a href="edit_siswa.php?id_siswa=<?php echo $row['id_siswa']; ?>">Edit</a>
					<a href="detail_siswa.php?id_siswa=<?php echo $row['id_siswa']; ?>">Detail</a>
					<a href="hapus_siswa.php?id_siswa=<?php echo $row['id_siswa']; ?>" onclick="return confirm('Anda yakin ingin hapus data ini?')">Hapus</a>
				</div>
			</td>
		</tr>
		<?php
			$no++;
		}
		?>
	</tbody>	
</table>