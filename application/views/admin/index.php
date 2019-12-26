<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <!-- DataTables -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <?= $this->session->flashdata('message'); ?>
            <h6 class="m-0 font-weight-bold text-primary">Table Product</h6>
        </div>
        <div class="card-body">

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newProductModal" style="background-color: #ff4da6">Add New Product</a>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Brand</th>
                            <th>Type</th>
                            <th>Price</th>
                            <th>Decription</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($pakaian as $p) : ?>
                            <tr>
                                <td><?= $p['Nama_Pakaian'] ?></td>
                                <td><?= $p['Merk_Pakaian'] ?></td>
                                <td><?= $p['Jenis_Pakaian'] ?></td>
                                <td><?= number_format($p["Harga_Pakaian"], 2, ',', '.'); ?></td>
                                <td><?= $p['Deskripsi_Pakaian'] ?></td>
                                <td><img src="<?= base_url('assets/img/pakaian/') . $p['Gambar_Pakaian'] ?>" class="img-thumbnail" width="150px"></td>
                                <td>
                                    <a href="<?= base_url(); ?>admin/delete/<?= $p['Id_Pakaian']; ?>" class="badge badge-danger" onclick="return confirm('Are you sure ?');">delete</a>
                                    <a href="<?= base_url(); ?>admin/ubah/<?= $p['Id_Pakaian']; ?>" class="badge badge-success">edit</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class=" modal fade" id="newProductModal" tabindex="-1" role="dialog" aria-labelledby="newProductModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newProductModalLabel">Add New Product</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/tambah'); ?>" method="post" enctype="multipart/form-data">

                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="Nama_Pakaian" name="Nama_Pakaian" placeholder="Name Product" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="Merk_Pakaian" name="Merk_Pakaian" placeholder="Brand Product" required>
                    </div>
                    <div class="form-group">
                        <select name="Jenis_Pakaian" id="Jenis_Pakaian" class="form-control" onclick="validasiTipe()" required>
                            <option value="">Type Product</option>
                            <option value="Baju">Clothes</option>
                            <option value="Jaket">Jackets</option>
                            <option value="Celana">Pants</option>
                            <option value="Rok">Skirts</option>
                        </select>
                    </div>
                    <div id="inputtipe" class="text-danger" style="display:none"> Pilih Tipe</div>
                    <div class="form-group">
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">IDR. </div>
                            </div>
                            <input type="text" class="form-control" id="Harga_Pakaian" name="Harga_Pakaian" placeholder="Price Product" onkeyup="validasiHarga()" required>
                        </div>
                    </div>
                    <div id="salahharga" class="text-danger" style="display:none" > Harus Nomor!!</div>
                    <div class="form-group">
                        <textarea name="Deskripsi_Pakaian" id="Deskripsi_Pakaian" cols="55" rows="10" placeholder="Decription Product" required></textarea>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-2">Picture</div>
                        <div class="row">
                            <div class="col-sm-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="Gambar_Pakaian" required>
                                    <label class="custom-file-label" for="Gambar_Pakaian" name="Gambar_Pakaian">Choosen file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="tambah">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>