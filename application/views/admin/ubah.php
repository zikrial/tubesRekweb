<!-- Begin Page Content -->
<div class="container-fluid">
    <div class="col-6 card">
        <h5 class="mt-3">Edit Product</h5>
        <form action="<?= base_url('admin/getubah'); ?>" method="post">
            <input type="hidden" name="Id_Pakaian" value="<?= $pakaian['Id_Pakaian']; ?>">
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" id="Nama_Pakaian" name="Nama_Pakaian" placeholder="Name Product" value="<?= $pakaian['Nama_Pakaian']; ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="Merk_Pakaian" name="Merk_Pakaian" placeholder="Brand Product" value="<?= $pakaian['Merk_Pakaian']; ?>">
                </div>
                <div class=" form-group">
                    <select name="Jenis_Pakaian" id="Jenis_Pakaian" class="form-control" value="<?= $pakaian['Jenis_Pakaian']; ?>>
                        <option value="">Type Product</option>
                        <option value=" Baju">Clothes</option>
                        <option value="Jaket">Jackets</option>
                        <option value="Celana">Pants</option>
                        <option value="Rok">Skirts</option>
                    </select>

                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="Harga_Pakaian" name="Harga_Pakaian" placeholder="Price Product" value="<?= $pakaian['Harga_Pakaian']; ?>">
                </div>
                <div class="form-group">
                    <textarea name="Deskripsi_Pakaian" id="Deskripsi_Pakaian" cols="55" rows="10" placeholder="Decription Product"><?= $pakaian['Deskripsi_Pakaian']; ?></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="getubah">Edit</button>
            </div>
        </form>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->