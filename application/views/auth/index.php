<!-- Content Wrapper -->
<?php
$data = file_get_contents(base_url() . 'assets/js/pakaian.json');
$pakaian = json_decode($data, true);

$pakaian = $pakaian["pakaian"];
?>

<div id="content-wrapper" class="d-flex flex-column">

    <!-- Navbar -->
    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow fixed-top">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <a class="navbar-brand" href="#">
                        <img src="<?= base_url('assets/'); ?>img/icon.png" width="200px" height="55px">
                    </a>
                    <li class="nav-item" style="color: black;">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Clothes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Jacket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pants</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Skirt</a>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Cari Produk" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>

            <!-- end navbar -->
            <!-- Sidebar Toggle (Topbar) -->

            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>

            </ul>

        </nav>
        <!-- End of Topbar -->
        <div class="hero-slider">
            <div class="hero-items owl-carousel">
                <div class="single-slider-item set-bg" data-setbg="<?= base_url('assets/'); ?>img/slider-1.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1>My Fashion</h1>
                                <h2>Cool Clothes Place</h2>
                                <a href="#" class="primary-btn">See Product</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider-item set-bg" data-setbg="<?= base_url('assets/'); ?>img/slider-2.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1>My Fashion</h1>
                                <h2>Cute Women's Fashion</h2>
                                <a href="#" class="primary-btn">See Product</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider-item set-bg" data-setbg="<?= base_url('assets/'); ?>img/slider-3.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <h1>My Fashion</h1>
                                <h2>Quality Product</h2>
                                <a href="#" class="primary-btn">See Product</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Latest Product Begin -->
        <section class="latest-products spad">
            <div class="container">
                <div class="product-filter">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="section-title">
                                <h2>Latest Products</h2>
                            </div>
                            <ul class="product-controls">
                                <li data-filter="*">All</li>
                                <li data-filter=".Baju">Dresses</li>
                                <li data-filter=".Jaket">Jackets</li>
                                <li data-filter=".Celana">Pants</li>
                                <li data-filter=".Rok">Skirts</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row" id="product-list">
                    <?php foreach ($pakaian as $p) : ?>
                        <div class="col-lg-3 col-sm-6 mix all <?= $p["jenis"]; ?> bags">
                            <div class="single-product-item">
                                <figure>
                                    <a href="#"><img src="<?= base_url('assets/'); ?>img/pakaian/<?= $p["gambar"] ?>"></a>
                                </figure>
                                <div class="product-text">
                                    <h6><?= $p["nama"] ?></h6>
                                    <p>Idr. <?= $p["harga"] ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- Latest Product End -->