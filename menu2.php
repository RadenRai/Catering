<?php
$datakategori = $paket->tampil();
?>
<style>
	.breadcrumb {
		margin-top: 20px;
	}

	.panel-body {
		margin-top: 20px;
		background-color: #e5e7e9;
	}

	.preloader {
		position: fixed;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		z-index: 9999;
		background-color: #fff;
	}

	.preloader .loading {
		position: absolute;
		left: 50%;
		top: 50%;
		transform: translate(-50%, -50%);
		font: 14px arial;
	}

	.galeriproduksi {
		width: 200px;
		height: 160px;
	}
</style>
<div class="panel panel-body">
	<div class="container">
		<div class="billing-details">
			<div class="section-title">
				<center>
					<h3 class="title">Menu Catering Ananda</h3>
				</center><br>
				<p class="text-center">Melayani jasa layanan catering untuk berbagai acara pernikahan, syukuran, pesta, gathering, dan sebagainya, baik di dalam maupun luar kota</p>
			</div>
		</div>
		<?php foreach ($datakategori as $key => $value) : ?>

			<div class="col-md-4 col-xs-6 kgp">
				<a href="paketmenu?id=<?= $value['id_paket']; ?>"><img class="img-thumbnail" src="admin/upload/img-paket/<?= $value['gambar'] ?>" alt=""></a><br><br>
				<a href="paketmenu?id=<?= $value['id_paket']; ?>">
					<h3 class="text-center"><?= $value['nama_paket'] ?></h3>
				</a>
				<p class="text-center"><a href="paketmenu?id=<?= $value['id_paket']; ?>"><?= $value['uraian'] ?></a></p>
			</div>
		<?php endforeach ?>
	</div>
</div>