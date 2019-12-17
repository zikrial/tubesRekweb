        <!-- Sidebar -->
        <ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #ff0081;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="sidebar-brand-text mx-3">My Fashion</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Query Menu -->
            <?php
                                                                                            $role_id = $this->session->userdata('role_id');
                                                                                            $queryMenu = "SELECT `user_menu`.`id`, `menu`
                            FROM `user_menu` JOIN `user_access_menu`
                              ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                           WHERE `user_access_menu`.`role_id` = $role_id
                        ORDER BY `user_access_menu`.`menu_id` ASC
                                ";
                                                                                            $menu = $this->db->query($queryMenu)->result_array();
            ?>

            <!-- Looping Menu -->
            <?php foreach ($menu as $m) : ?>
                <div class="sidebar-heading">
                    <?= $m['menu']; ?>
                </div>

                <!-- Siapkan Menu Sesuai Menu -->
                <?php
                                                                                                $menuId = $m['id'];
                                                                                                $querySubMenu = "SELECT *
                                       FROM `user_sub_menu`
                                      WHERE `menu_id` = $menuId
                                        AND `is_active` = 1
                                     ";
                                                                                                $subMenu = $this->db->query($querySubMenu)->result_array();
                ?>

                <?php foreach ($subMenu as $sm) : ?>
                    <?php if ($title == $sm['title']) : ?>
                        <li class="nav-item active">
                        <?php else : ?>
                        <li class="nav-item">
                        <?php endif; ?>
                        <a class="nav-link pb-0" href="<?= base_url($sm['url']); ?>">
                            <i class="<?= $sm['icon']; ?>"></i>
                            <span><?= $sm['title']; ?></span></a>
                        </li>

                    <?php endforeach; ?>

                    <hr class="sidebar-divider mt-3">

                <?php endforeach; ?>

                <div class="sidebar-heading">
                    Product
                </div>

                <li class="nav-item">
                    <a class="nav-link pb-0" href="<?= base_url('user/product/Baju'); ?>">
                        <i class="fas fa-fw fa-angle-double-right"></i>
                        <span>Clothes</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link pb-0" href="<?= base_url('user/product/Jaket'); ?>">
                        <i class="fas fa-fw fa-angle-double-right"></i>
                        <span>Jacket</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link pb-0" href="<?= base_url('user/product/Celana'); ?>">
                        <i class="fas fa-fw fa-angle-double-right"></i>
                        <span>Pants</span></a>
                </li>

                <li class="nav-item">
                    <a class="nav-link pb-0" href="<?= base_url('user/product/Rok'); ?>">
                        <i class="fas fa-fw fa-angle-double-right"></i>
                        <span>Skirts</span></a>
                </li>

                <hr class="sidebar-divider mt-3">

                <div class="sidebar-heading">
                    Shop
                </div>

                <li class="nav-item">
                    <a class="nav-link pb-0" href="<?= base_url('user/cart'); ?>">
                        <i class="fas fa-fw fa-cart-plus"></i>
                        <span>Cart</span></a>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

        </ul>
        <!-- End of Sidebar -->