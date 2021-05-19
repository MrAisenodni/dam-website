<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>SPK Penerimaan Beasiswa</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Noto+Sans+SC:wght@100&family=Pacifico&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Pacifico&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style type="text/css">
		body {
			margin-top:  0;
			padding: 0;
		}

		header {
			position: fixed;
			background: #535c68;
			padding: 20px;
			width: 100%;
			height: 30px;
		}

		.left_area h3 {
			color: #bdc3c7;
			margin-top: -1px;
			margin-left: 18px;
			font-size: 22px;
			font-family: 'Lobster', cursive;
			font-weight: 900;
		}

		.right_area {
			padding: 5px;
			background: #89B5C8;
			text-decoration: none;
			float: right;
			margin-top: -48px;
			margin-right: 40px;
			border-radius: 5px;
			color: white;
		}

		.right_area:hover {
			background: #4594B8;
			transition: 0.3s;
		}

		.sidebar {
			margin-left: 8px;
			background: #a4b0be;
			margin-top: 70px;
			position: fixed;
			left: 0;
			width: 21%;
			height: 100%;
		}

		.sidebar a {
			font-family: 'New Tegomin', serif;
			color: #ffffff;
			font-size: 19px;
			display: block;
			width: 100%;
			margin-top: 40px;
			line-height: 30px;
			text-decoration: none;
			padding-left: 40px;
			box-sizing: border-box;
			transition: 0.3s;
		}

		.sidebar a:hover {
			border-radius: 10px;
			transition: 0.6s;
			margin-left: -5px;
			background: #095F87;
		}

		.sidebar i {
			padding-right: 5px;
		}
	</style>
</head>
<body>
	<header>
		<div class="left_area">
			<h3>SMK Negeri 12</h3>
		</div>
		<div class="right_area">
			<a href="logout.php" style="text-decoration:none; color:white; font-size:17px;"><i class="fas fa-sign-out-alt"></i>Logout</a>
		</div>
	</header>

	<div class="sidebar">
		<a href="admin.php" class="active"><i class="fas fa-home"></i><span>Dashboard</span></a>
		<a href="?page=kriteria"><i class="fas fa-sort-alpha-up"></i><span>Kriteria</span></a>
		<a href="?page=siswa"><i class="fas fa-user"></i><span>Nama Siswa</span></a>
		<a href="?page=ranking"><i class="fas fa-chart-bar"></i><span>Ranking</span></a>
		
	</div>


	<?php

	// settinng variabel page & action
	$page = isset($_GET['page']) ? $_GET['page'] : "";
	$action = isset($_GET['action']) ? $_GET['action'] : "";

	// setting halaman
	if ($page==""){
		include "welcome.php";
	}elseif ($page=="kriteria") {
		if ($action=="") {
			include "kriteria.php";
		} elseif ($action=="tambah") {
			include 'tambah_kriteria.php';
		}
	}elseif ($page=="siswa") {
		include "siswa.php";
	}elseif ($page=="ranking") {
		include "ranking.php";
	}
	?>
</body>
</html>