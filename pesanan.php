<?php  
$datapesanan = $pesanan->tampil_pesanan_pelanggan($id_pelanggan);
?>
<div class="col-md-9">
	<div class="panel panel-default">
		<div class="panel-body">
			<p style="font-size: 30px;" class="text-center atas"><img class="packing" width="60" src="img/pesanansaya.png" alt=""> Pesanan Saya </p>
			<hr>
			<div class="row">
				<div class="col-md-12">
					<table id="example" class="table table-bordered table-hover table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Tanggal Transaksi</th>
								<th>Status</th>
								<th>Total</th>
								<th>Opsi</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($datapesanan as $key => $value): ?>	
								<?php  
								$tanggal = date('Y-m-d', strtotime($value['tanggal_pesanan']));
								?>
								<tr>
									<td><?= $key+1 ?></td>
									<td><?= tanggal_indo($tanggal, true); ?></td>
									<td>
										<?php if ($value['status_pesanan']=="Belum Bayar"): ?>
											<span class="label label-danger"><?php echo $value['status_pesanan'] ?></span>
											<?php elseif ($value['status_pesanan']=="Menunggu Konfirmasi"): ?>
												<span class="label label-warning"><?php echo $value['status_pesanan'] ?></span>
												<?php elseif ($value['status_pesanan']=="Menunggu Pelunasan"): ?>
													<span class="label label-danger"><?php echo $value['status_pesanan'] ?></span>
													<?php elseif ($value['status_pesanan']=="Menunggu Konfirmasi Pelunasan"): ?>
														<span class="label label-warning"><?php echo $value['status_pesanan'] ?></span>
														<?php elseif ($value['status_pesanan']=="Proses"): ?>
															<span class="label label-info"><?php echo $value['status_pesanan'] ?></span>
															<?php elseif ($value['status_pesanan']=="Selesai"): ?>
																<span class="label label-success"><?php echo $value['status_pesanan'] ?></span>
																<?php elseif ($value['status_pesanan']=="Pembayaran Ditolak"): ?>
																	<span class="label label-danger">Pembayaran DP Ditolak</span>
																	<?php elseif ($value['status_pesanan']=="Pembayaran Pelunasan Ditolak"): ?>
																		<span class="label label-danger">Pembayaran Pelunasan Ditolak</span>
																	<?php endif ?>
																</td>
																<td>Rp. <?= number_format($value['total_pesanan']) ?></td>
																<td>
																	<a href="nota.php?id=<?= $value['id_pesanan'] ?>" class="btn btn-primary btn-sm"><i class="fa fa-file-text"></i> Nota</a>
																	<a href="pelanggan.php?page=pembayaran&id=<?= $value['id_pesanan'] ?>" class="btn btn-success btn-sm"><i class="fa fa-money"></i> Pembayaran</a>
																	<?php if ($value['status_pesanan']=="Selesai"): ?>
																		<a href='#penilaian' class='btn btn-warning btn-sm' data-toggle='modal' data-id="<?= $value['id_pesanan'] ?>" data-idpelanggan="<?= $id_pelanggan ?>" style="background-color: #f7ae09; border-color: #f7ae09;"><i class="fa fa-star"></i> Penilaian</a>

																		<?php elseif ($value['status_pesanan']=="Belum Bayar"): ?>
																			<a href='deadline.php?id=<?php echo $value['id_pesanan'] ?>' class='btn btn-info btn-sm'><i class='fa fa-clock-o'></i> Deadline</a>
																			<?php elseif ($value['status_pesanan']=="Menunggu Pelunasan"): ?>
																				<a href='deadline.php?id=<?php echo $value['id_pesanan'] ?>' class='btn btn-info btn-sm' data-toggle='modal' data-id="<?= $value['id_pesanan'] ?>" data-idpelanggan="<?= $id_pelanggan ?>"><i class="fa fa-clock-o"></i> Deadline</a>
																			<?php endif ?>
																		</td>
																	</tr>
																<?php endforeach ?>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="modal fade" id="penilaian" role="dialog">
										<div class="modal-dialog" style="margin-top: 120px;" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
													<h4 class="modal-title"><i class="fa fa-user-cubes"></i> Penilaian Pesanan</h4>
												</div>
												<div class="modal-body">

													<div class="hasil-data"></div>
													<?php 
													if (isset($_POST['kirimpenilaian'])) {
														$pesanan->penilaian($_POST['id_pesanan'],$_POST['id_pelanggan'],$_POST['penilaian']);
														echo "<script>alert('Penilaian berhasil di kirim, terima kasih telah memesan catering di toko kami!');</script>";
														echo "<script>location='pelanggan?page=pesanan';</script>"; 
													}
													?> 
												</div>
											</div>
										</div>
									</div>

