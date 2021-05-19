<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login Page</title>
	<style type="text/css">
		body {
			margin: 0;
			padding: 0;
			background: url(logo12.png);
			background-size: contain;
			background-position: center;
			background-repeat: no-repeat;
			background-attachment: fixed;
		}
	</style>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="font/css/all.css">
</head>
<body>
	<form action="" method="post">
		<div class="login">
						
			<div class="avatar">
				<i class="fa fa-user"></i>
			</div>

			<h2>Login</h2>

			<div class="box-login">
				<i class="fas fa-id-card"></i>
				<input type="text" name="user" placeholder="Username" required="">
			</div>

			<div class="box-login">
				<i class="fas fa-lock"></i>
				<input type="password" name="pass" placeholder="Password" required="">
			</div>

			<button type="submit" name="login" class="btn-login">
				Sign In
			</button>
		</div>
	</form>	

	<?php
	if(isset($_POST['login'])){
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$data_user = mysqli_query($koneksi, "SELECT * FROM pengguna WHERE username = '$user' AND password = '$pass'");
		$r = mysqli_fetch_array($data_user);
		$username = $r['username'];
		$password = $r['password'];
		$level = $r['level'];
		if($level == 'admin'){
			$_SESSION['level'] = $level;
			header('location:admin.php');
		}elseif($level == 'user'){
			$_SESSION['level'] = $level;
			header('location:user.php');
		}else{
			?><script type="text/javascript">alert("Username / Password Salah");</script> <?php
		}
	}		
	?>
</body>
</html>