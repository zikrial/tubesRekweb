<div class="card mb-3 ml-3" style="max-width: 600px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?= base_url('assets/img/pakaian/') . $pakaian['Gambar_Pakaian'] ?>" class="card-img" style="width: 100%">
    </div>
    <div class="col-md-8">
      <div class="card-body">

        <h5 class="card-title">Detail</h5>
        <h5 class="card-title">Name : <?= $pakaian['Nama_Pakaian']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted">Brand : <?= $pakaian['Merk_Pakaian'] ?></h6>
        <hr>
        <p class="card-text">Type : <?= $pakaian['Jenis_Pakaian']; ?></p>
        <hr>
        <p class="card-text"><?= $pakaian['Deskripsi_Pakaian']; ?></p>
        <hr>
        <p class="card-text">Price : IDR. <?= number_format($pakaian["Harga_Pakaian"], 2, ',', '.'); ?></p>
        <hr>
        <div class="form-group">
          <select name="Ukuran_Pakaian" id="Ukuran_Pakaian" class="form-control">
            <option value="">Size Product</option>
            <option value="#">S</option>
            <option value="#">M</option>
            <option value="#">L</option>
            <option value="#">XL</option>
            <option value="#">XXL</option>
          </select>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" id="Jumlah_Pakaian" name="Jumlah_Pakaian" placeholder="Amount">
        </div>
        <a href="<?= base_url() ?>user" class="btn btn-primary">Back</a>
        <a href="#" class="btn btn-success"><i class="fas fa-fw fa-cart-plus"></i> Add to Cart</a>
      </div>
    </div>
  </div>
</div>