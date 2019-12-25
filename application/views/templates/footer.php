<!-- Footer -->
<footer class="sticky-footer footer-section spad">
    <div class="container">
        <div class="footer-widget">
            <li class="single-footer-widget">
                <h4 id="About">About us</h4>
                <ul>
                    <li>Sumpram Team</li>
                    <li> © 2019 </li>
                    <li><i class="fas fa-map-marker-alt"></i> Jl. Gg. Hj. Ridho II, Gegerkalong no 61, Kecamatan Sukasari, Bandung</li>
                    <li><i class="fas fa-phone-alt"></i> 087824166454</li>
                    <li><i class="far fa-envelope"></i> sumpram@mail.com</li>
                </ul>
            </li>
            Copyright © 2019 Supram
        </div>
    </div>
</footer>
<!-- End of Footer -->
</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Are you sure want to logout ?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal Index -->
<div class="modal fade" id="modalDetailIndex" tabindex="-1" role="dialog" aria-labelledby="modalDetailIndex" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalDetailIndexTitle">Detail Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="<?= $pakaian["gambar"] ?>" class="img-thumbnail">
                <p>Name : <?= $pakaian["nama"] ?></p>
                <p>Brand : <?= $pakaian["merk"] ?></p>
                <p>Category : <?= $pakaian["jenis"] ?></p>
                <p>Price : <?= $pakaian["harga"] ?></p>
                <p>Decription : <?= $pakaian["deskripsi"] ?></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Order Now !</button>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery.slicknav.js"></script>
<script src="<?= base_url('assets/'); ?>js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/jquery.nice-select.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/mixitup.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/main.js"></script>

<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });

    $('.form-check-input').on('click', function() {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
            url: "<?= base_url('admin/changeaccess'); ?>",
            type: 'post',
            data: {
                menuId: menuId,
                roleId: roleId
            },
            success: function() {
                document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
            }
        });
    });
</script>

</body>

</html>