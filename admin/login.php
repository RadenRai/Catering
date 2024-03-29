<?php  
include '../config/class.php';

if (isset($_SESSION["admin"])) 
{
	echo "<script>location='apps/./';</script>";
	exit();
}
$datakonfigurasi = $konfigurasi->ambil();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $datakonfigurasi['nama_instansi'] ?></title>
	<link rel="icon" href="upload/img-konfigurasi/<?php echo $datakonfigurasi['logo'] ?>" type="image/x-icon"/>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
	body {
		color: #999;
		 background: linear-gradient(to right, #40b149 0%, #54d44e 100%);
		font-family: 'Varela Round', sans-serif;
	}
	.form-control {
		box-shadow: none;
		border-color: #ddd;
	}
	.form-control:focus {
		border-color: #1269dc; 
	}
	.login-form {
		width: 350px;
		margin: 0 auto;
		padding: 30px 0;
		margin-top: 50px;
	}
	.login-form form {
		color: #434343;
		border-radius: 1px;
		margin-bottom: 15px;
		background: #fff;
		border: 1px solid #f3f3f3;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
		padding: 30px;
	}
	.login-form h4 {
		text-align: center;
		font-size: 22px;
		margin-bottom: 20px;
	}
	.login-form .avatar {
		color: #fff;
		margin: 0 auto 30px;
		text-align: center;
		width: 100px;
		height: 100px;
		border-radius: 50%;
		z-index: 9;
		 background: linear-gradient(to right, #40b149 0%, #54d44e 100%);
		padding: 15px;
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
	}
	.login-form .avatar i {
		font-size: 62px;
	}
	.login-form .form-group {
		margin-bottom: 20px;
	}
	.login-form .form-control, .login-form .btn {
		min-height: 40px;
		border-radius: 2px; 
		transition: all 0.5s;
	}
	.login-form .close {
		position: absolute;
		top: 15px;
		right: 15px;
	}
	.login-form .btn {
		background: #40b149;
		border: none;
		line-height: normal;
	}
	.login-form .btn:hover, .login-form .btn:focus {
		
		background: #3eac47;
	}
	.login-form .checkbox-inline {
		float: left;
	}
	.login-form input[type="checkbox"] {
		margin-top: 2px;
	}
	.login-form .forgot-link {
		float: right;
	}
	.login-form .small {
		font-size: 13px;
	}
	.login-form a {
		color: #4aba70;
	}
</style>
</head>
<body>
	<div class="login-form">    
		<form method="post">
			<div class="avatar"><i class="material-icons">&#xE7FF;</i></div>
			<h4 class="modal-title">Login to Your Account</h4>
			<?php  
			if (isset($_POST['login'])) 
			{
				$hasil = $admin->login($_POST['email'],$_POST['password']);
				if ($hasil=="sukses") 
				{
					echo "<script>location='apps/./';</script>";
				}
				else
				{
					echo "<div class='alert alert-danger'>Username & Password tidak sesuai!</div>";
				}
			}
			?>
			<div class="form-group">
				<input type="text" name="email" class="form-control" placeholder="Username" required="required">
			</div>
			<div class="form-group">
				<input type="password" name="password" class="form-control" placeholder="Password" required="required">
			</div>
			<div class="form-group small clearfix">
				<label class="checkbox-inline"><input type="checkbox" required=""> Remember me</label>
			</div> 
			<input type="submit" name="login" class="btn btn-primary btn-block btn-lg" value="Login">              
		</form>			
	</div>
</body>
</html>                                		                            