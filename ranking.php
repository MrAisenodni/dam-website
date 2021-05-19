<?php
include 'koneksi.php';
?>
<br><br><br>
<div class="ranking">
	<h1>Ranking</h1>
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

	.action_ranking a {
		background-color: #89B5C8;
		border-radius: 10px;
		text-decoration: none;
		color: #fff;
		padding: 10px;
		font-size: 12px;
	}

	.action_ranking a:hover {
		background: #4594B8;
		transition: 0.3s;
	}

</style>
<table style="margin-left: 25%;">
	<thead>
		<tr>
			<th>No.</th>
			<th>NIK</th>
			<th>Nama Lengkap</th>
			<th>Skor</th>
            <th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$query = "SELECT a.id_rank, a.nik, b.nama_lengkap, a.total FROM rank a JOIN siswa b ON a.nik = b.nik ORDER BY a.total DESC";
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
			<td><?php echo $row['nama_lengkap'] ?></td>
			<td><?php echo $row['total'] ?></td>
			<td>
				<div class="action_ranking">
					<a href="detail_rank.php?id_rank=<?php echo $row['id_rank']; ?>">Detail</a>
				</div>
			</td>
		</tr>
		<?php
			$no++;
		}
		?>
	</tbody>	
</table>