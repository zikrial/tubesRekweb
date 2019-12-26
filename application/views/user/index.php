                <!-- Begin Page Content -->
                <?= $this->session->flashdata('message'); ?>
                <h1 class=" mb-4 text-gray-800 text-center"><?= $title; ?></h1>
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <?php foreach ($pakaian as $p) : ?> <div class="det-cards"> <img src="<?= base_url('assets/img/pakaian/') . $p['Gambar_Pakaian'] ?>" class="image-cards" style="width:100% ;height : 450px">
                                <div class="container-card col-lg-5">
                                    <h6><b><?= $p['Nama_Pakaian'] ?></b></h6>
                                    <p>IDR. <?= number_format($p["Harga_Pakaian"], 2, ',', '.'); ?></p>
                                    <a href="<?= base_url() ?>user/detail/<?= $p['Id_Pakaian']; ?>" class="btn btn-primary" style="background-color: #ff4da6">Detail</a>
                                </div>
                            </div><?php endforeach; ?>
                    </div>
                </div>
                </div>