<?php  
$data= $pesanan->tampil_pesanan();
?>
<div class="breadcome-area mg-b-30 small-dn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcome-list shadow-reset">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="breadcome-heading">
                                <h1>Pesanan</h1>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="breadcome-menu">
                                <li><a href="index.php?halaman=home">Beranda</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Pesanan</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="breadcome-area mg-b-30 des-none">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list map-mg-t-40-gl shadow-reset">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="breadcome-heading">
                                <form role="search" class="">
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <a href=""><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <ul class="breadcome-menu">
                                <li><a href="#">Home</a> <span class="bread-slash">/</span>
                                </li>
                                <li><span class="bread-blod">Dashboard</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcome End-->
<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline13-list shadow-reset">

                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">

                            <table  id="example" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tgl. Transaksi</th>
                                        <th>Pelanggan</th>
                                        <th>status</th>
                                        <th>total pesanan</th>
                                        <th>Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($data as $key => $value): ?>
                                        <tr>
                                            <?php  
                                            $tanggal = date('Y-m-d', strtotime($value['tanggal_pesanan']));
                                            ?>
                                            <td width="1%"><?= $key+1 ?></td>
                                            <td width="13%"><?= tanggal_indo($tanggal, true); ?></td>
                                            <td width="12%"><?= $value['nama'] ?></td>
                                            <td width="10%">
                                                <?php if ($value['status_pesanan']=="Belum Bayar"): ?>
                                                    <span class="label label-danger"><?= $value['status_pesanan'] ?></span>
                                                    <?php elseif ($value['status_pesanan']=="Menunggu Konfirmasi"): ?>
                                                      <span class="label label-warning"><?= $value['status_pesanan'] ?></span>
                                                      <?php elseif ($value['status_pesanan']=="Proses"): ?>
                                                          <span class="label label-info"><?= $value['status_pesanan'] ?></span>
                                                          <?php elseif ($value['status_pesanan']=="Selesai"): ?>
                                                              <span class="label label-success"><?= $value['status_pesanan'] ?></span>
                                                              <?php elseif ($value['status_pesanan']=="Pembayaran Ditolak"): ?>
                                                                  <span class="label label-danger"><?= $value['status_pesanan'] ?></span>
                                                                  <?php elseif ($value['status_pesanan']=="Menunggu Pelunasan"): ?>
                                                                      <span class="label label-danger">Menunggu Pelunasan</span>
                                                                      <?php elseif ($value['status_pesanan']=="Menunggu Konfirmasi Pelunasan"): ?>
                                                                          <span class="label label-danger">Menunggu Konfirmasi Pelunasan</span>
                                                                          <?php elseif ($value['status_pesanan']=="Pembayaran Pelunasan Ditolak"): ?>
                                                                              <span class="label label-danger">Pembayaran Pelunasan Ditolak</span>
                                                                          <?php endif ?>
                                                                      </td>
                                                                      <td width="10%">Rp. <?= number_format($value['total_pesanan']) ?></td>
                                                                      <td width="20%">
                                                                        <a href="index.php?halaman=detailpesanan&id=<?= $value['id_pesanan'] ?>" class="btn btn-warning btn-xs as">Detail</a>
                                                                        <a href="index.php?halaman=pembayaran&id=<?= $value['id_pesanan'] ?>" class="btn btn-success btn-xs as"> Pembayaran</a>
                                                                        <?php if ($value['status_pesanan']=="Proses"): ?>
                                                                            <a href="#" class="konfirmasi btn btn-success btn-xs as" data-toggle="modal" data-id="<?= $value['id_pesanan'] ?>">Konfirmasi</a>
                                                                            <?php elseif ($value['status_pesanan']=="Selesai"): ?>
                                                                                <a class="btn btn-success btn-xs disabled"><i class="fa fa-check"></i></a>
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
                                </div>
                            </div>
                            <!-- Static Table End -->
                        </div>
                    </div>

                    <div class="modal fade konfirmasi-pesanan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" style="margin-top: 135px;">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h3 class="modal-title">Konfirmasi Pesanan</h3>
                                </div>
                                <div class="modal-body">

                                    <p class="text-center">Apakah anda yakin pesanan ini sudah selesai ?</p>
                                    <form method="post">
                                        <div class="form-group">
                                            <input type="hidden" class="form-control" name="id_pesanan" placeholder="Silahkan masukkan email anda" required="">
                                        </div>
                                        <div class="modal-footer">
                                            <center>
                                                <button style="background: linear-gradient(to bottom, #3eac47 0%, #54d44e 100%); border-color: #40b149;" class="btn btn-success" name="konfirmasi"> Konfirmasi</button>
                                                <button type="button" class="btn btn-default" data-dismiss="modal" style="border-color: #3eac47;">Close</button>
                                            </center>
                                        </div>
                                    </form>
                                    <?php 
                                    if (isset($_POST["konfirmasi"])) 
                                    {
                                        $pesanan->konfirmasipesanan($_POST["id_pesanan"]);
                                        echo "<script>alert('Konfirmasi berhasil!');</script>";
                                        echo "<script>location='index.php?halaman=pesanan';</script>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top: 220px;"></div>