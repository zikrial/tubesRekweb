<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="col-6 card">
        <h5 class="mt-3">Edit Product</h5>
        <form action="<?= base_url('admin/getubah'); ?>" method="post" autocomplete="off">
            <input type="hidden" name="Id_Pakaian" value="<?= $pakaian['Id_Pakaian']; ?>">
            <div class="modal-body">
                <div class="form-group">
                    <input type="hidden" class="form-control" id="Id_Pakaian" name="Id_Pakaian" value="<?= $pakaian['Id_Pakaian']; ?>">
                    <input type="text" class="form-control" id="Nama_Pakaian" name="Nama_Pakaian" placeholder="Name Product" value="<?= $pakaian['Nama_Pakaian']; ?>">
                    <?= form_error('Nama_Pakaian', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="Merk_Pakaian" name="Merk_Pakaian" placeholder="Brand Product" value="<?= $pakaian['Merk_Pakaian']; ?>">
                    <?= form_error('Merk_Pakaian', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class=" form-group">
                    <select name="Jenis_Pakaian" id="Jenis_Pakaian" class="form-control" value="<?= $pakaian['Jenis_Pakaian']; ?>>
                        <option value="">Type Product</option>
                        <option value=" Baju">Clothes</option>
                        <option value="Jaket">Jackets</option>
                        <option value="Celana">Pants</option>
                        <option value="Rok">Skirts</option>
                    </select>
                    <?= form_error('Jenis_Pakaian', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <div class="input-group-text">IDR. </div>
                        </div>
                        <input type="text" class="form-control" id="Harga_Pakaian" name="Harga_Pakaian" placeholder="Price Product" value="<?= $pakaian['Harga_Pakaian']; ?>">
                    </div>
                    <?= form_error('Harga_Pakaian', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <textarea name="Deskripsi_Pakaian" id="Deskripsi_Pakaian" cols="55" rows="10" placeholder="Decription Product"><?= $pakaian['Deskripsi_Pakaian']; ?></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <a href="<?= base_url('admin') ?>" class="btn btn-secondary">back</a>
                <button type="submit" class="btn btn-primary" name="ubah">Edit</button>
            </div>
        </form>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->