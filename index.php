<?php
include 'config/class.php';
$dataprodukterbaru = $menu->menuterbaru();
$datakonfigurasi = $konfigurasi->ambil();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $datakonfigurasi['nama_instansi'] ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="admin/upload/img-konfigurasi/<?= $datakonfigurasi['logo'] ?>">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="css/style.css" />
	<style>
		.gambarnew {
			width: 100%;
			height: 280px;
		}
	</style>
</head>

<body>

	<?php include 'header.php'; ?>
	<div id="hot-deal" class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12">
					<div class="hot-deal">
						<ul class="hot-deal-countdown">
							<li>
								<div>
									<h3><i class="fa fa-diamond"></i></h3>
									<span>HIGHLY RECOMENDED</span>
								</div>
							</li>
							<li>
								<div>
									<h3><i class="fa fa-volume-control-phone"></i></h3>
									<span>GREAT SUPPORT</span>
								</div>
							</li>
							<li>
								<div>
									<h3><i class="fa fa-comments"></i></h3>
									<span>POSITIVE REVIEWS</span>
								</div>
							</li>
							<li>
								<div>
									<h3><i class="fa fa-id-card-o"></i></h3>
									<span>PROFESIONAL SERVICE</span>
								</div>
							</li>
						</ul>
						<h2 class="text-uppercase">
							ANANDA CATERING</h2>
						<p>Homemade Catering & Cakes</p><!-- 
						<a class="primary-btn cta-btn" href="#">Pesan Sekarang!</a> -->
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div><br><br><br>

	<div class="section">
		<div class="container">
			<div class="row">
				<div class="billing-details">
					<div class="section-title">
						<center>
							<h3 class="title">Citarasa Prima, Kualitas Utama</h3>
						</center><br>
						<p class="text-center">Ananda Catering bekasi melayani jasa boga berkualitas dan bercitarasa prima dengan tampilan yang lebih eksklusif dan lebih terpercaya dalam memberikan jamuan bagi tamu-tamu penting Anda. Beragam menu masakan nusantara dan dunia menjadikan Salsa sebagai jasa catering yang inovatif dengan lebih dari 200 koleksi menu lezat yang siap dihidangkan.</p>
					</div>
					<center><a class="primary-btn cta-btn" href="tentang">Selengkapnya tentang Ananda catering</a></center>
				</div>
			</div>
		</div>
	</div>

	<?php include 'menu2.php'; ?>
	<?php include 'produkterbaru.php'; ?>


	<?php include 'whatsapp.php'; ?>

	<?php include 'footer.php'; ?>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/nouislider.min.js"></script>
	<script src="js/jquery.zoom.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/tawkto.js"></script>
	<script src="js/active.js"></script>
</body>

</html>