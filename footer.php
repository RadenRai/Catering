<?php
$datapaket = $paket->tampilfooter();
?>
<div id="newsletter" class="section hidden-print">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="newsletter">
					<ul class="newsletter-follow">
						<li><a href="https://api.whatsapp.com/send?phone=6287700216574&amp;text=Hallo%20admin,%20Saya%20ingin%20memesan%20catering.%20Bagaimana%20cara%20ordernya ?" target="blank"><i class="fa fa-whatsapp"></i></a></li>
						<li><a href="https://www.instagram.com/shofa_marwahcatering/" target="_blank"><i class="fa fa-instagram"></i></a></li>
						<li><a href="https://www.google.com/maps/place/UD.+Catering+Marwah/@-7.7736151,110.3331174,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a5874685aae5d:0x66529f5de1671ade!8m2!3d-7.7736204!4d110.3353061" target="_blank"><i class="fa fa-map-marker"></i></a></li>
						<!-- <li>
							<a href="#"><i class="fa fa-twitter"></i></a>
						</li> -->
						<!-- <li>
							<a href="#"><i class="fa fa-pinterest"></i></a>
						</li> -->
						<!-- <li>
							<a href="#"><i class="fa fa-youtube"></i></a>
						</li> -->
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<footer id="footer" class="hidden-print">
	<div class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-xs-6">
					<div class="footer">
						<h3 class="footer-title"> Catering Ananda</h3>
						<ul class="footer-links">
							<li>
								<p align="justify" style="color: #9fa6b0;">Ananda Catering Bekasi melayani jasa boga berkualitas dan bercitarasa prima dengan tampilan yang lebih eksklusif dan lebih terpercaya dalam memberikan jamuan bagi tamu-tamu penting Anda. Beragam menu masakan nusantara dan dunia menjadikan Salsa sebagai jasa catering yang inovatif dengan lebih dari 200 koleksi menu lezat yang siap dihidangkan. </p>
							</li>
							<li><a href="https://www.google.com/maps/place/UD.+Catering+Marwah/@-7.7736151,110.3331174,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a5874685aae5d:0x66529f5de1671ade!8m2!3d-7.7736204!4d110.3353061" target="_blank"><i class="fa fa-map-marker"></i>Bekasi</a></li>
							<li><a href="https://mail.google.com/mail/?view=cm&fs=1&to=marwahcateringinfo@gmail.com" target="_blank"><i class="fa fa-envelope-o"></i> cateringinfo@gmail.com</a></li>
							<li><a href="https://api.whatsapp.com/send?phone=628112502756&amp;text=Hallo%20admin,%20Saya%20ingin%20memesan%20catering.%20Bagaimana%20cara%20ordernya ?" target="_blank"><i class="fa fa-whatsapp"></i> 0811-2502-756</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-2 col-xs-6">
					<div class="footer">
						<h3 class="footer-title">Paket Menu</h3>
						<ul class="footer-links">
							<?php foreach ($datapaket as $key => $value) : ?>
								<li><a href="paketmenu?id=<?= $value['id_paket']; ?>"><?= $value['nama_paket'] ?></a></li>
							<?php endforeach ?>
						</ul>
					</div>
				</div>
				<div class="clearfix visible-xs"></div>
				<div class="col-md-3 col-xs-6">
					<div class="footer">
						<h3 class="footer-title">LOKASI KAMI</h3>
						<a href="https://www.google.com/maps/place/UD.+Catering+Marwah/@-7.7736151,110.3331174,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a5874685aae5d:0x66529f5de1671ade!8m2!3d-7.7736204!4d110.3353061" target="_blank" class="btn btn-success btn-block" style="background-color: #40b149; border-color: #40b149;"><i class="fa fa-map-marker"></i> Klik Disini</a><br>
						<a href="https://www.google.com/maps/place/UD.+Catering+Marwah/@-7.7736151,110.3331174,17z/data=!3m1!4b1!4m5!3m4!1s0x2e7a5874685aae5d:0x66529f5de1671ade!8m2!3d-7.7736204!4d110.3353061" target="_blank"><img src="img/maps.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="bottom-footer" class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<span class="copyright">
						Copyright Ananda Catering &copy; <script>
							document.write(new Date().getFullYear());
						</script> All rights reserved
					</span>
				</div>
			</div>
		</div>
	</div>
</footer>