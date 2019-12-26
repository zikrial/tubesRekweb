        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column" style="background-color: #e3f2fd;">

          <!-- Navbar -->
          <!-- Main Content -->
          <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">

                  <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('user') ?>">Home</a>
                  </li>

                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Product
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="<?= base_url('user/product') ?>/Baju">Clothes</a>
                      <a class="dropdown-item" href="<?= base_url('user/product') ?>/Jaket">Jackets </a>
                      <a class="dropdown-item" href="<?= base_url('user/product') ?>/Celana">Pants</a>
                      <a class="dropdown-item" href="<?= base_url('user/product') ?>/Rok">Skirts</a>
                    </div>
                  </li>

                  <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('user/cart') ?>">Cart</a>
                  </li>

                  <li class="nav-item active">
                    <a class="nav-link" href="<?= base_url('user') ?>" data-toggle="modal" data-target="#addSaldoModal">Top up</a>
                  </li>

                </ul>
              </div>

              <!-- end navbar -->
              <!-- Sidebar Toggle (Topbar) -->
              <p class="mt-4">My Saldo : <?= number_format($user["saldo"], 2, ',', '.'); ?></p>
              <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                <i class="fa fa-bars"></i>
              </button>


              <!-- Topbar Navbar -->
              <ul class="navbar-nav ml-auto">

                <div class="topbar-divider d-none d-sm-block"></div>

                <!-- Nav Item - User Information -->
                <li class="nav-item dropdown no-arrow">
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
                    <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['image']; ?>">
                  </a>
                  <!-- Dropdown - User Information -->
                  <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="<?= base_url('user/profile'); ?>">
                      <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                      My Profile
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                      <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                      Logout
                    </a>
                  </div>
                </li>

              </ul>

            </nav>
            <!-- End of Topbar -->