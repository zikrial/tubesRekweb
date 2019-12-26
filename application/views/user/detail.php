<div class="card mb-3 ml-3" style="max-width: 600px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="<?= base_url('assets/img/pakaian/') . $pakaian['Gambar_Pakaian'] ?>" class="card-img" style="width: 100%">
    </div>
    <div class="col-md-7 mb-5">
      <div class="card-body mb-5">

        <form action="<?= base_url('user/tambahCart'); ?>" method="post" enctype="multipart/form-data">


          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text" style="background-color: white; border-color:white;">Type:</div>
            </div>
            <input type="text" readonly class="form-control" id="Jenis_Pakaian" name="Jenis_Pakaian" value="<?= $pakaian["Jenis_Pakaian"]; ?>" style="background-color: white; border-color: white;">
          </div>

          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text" style="background-color: white; border-color:white;">Name:</div>
            </div>
            <input type="text" readonly class="form-control" id="Nama_Pakaian" name="Nama_Pakaian" value="<?= $pakaian["Nama_Pakaian"]; ?>" style="background-color: white; border-color: white;">
          </div>

          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text" style="background-color: white; border-color:white;">Brand:</div>
            </div>
            <input type="text" readonly class="form-control" id="Merk_Pakaian" name="Merk_Pakaian" value="<?= $pakaian["Merk_Pakaian"]; ?>" style="background-color: white; border-color: white;">
          </div>


          <div class="input-group mb-2">
            <div class="input-group-prepend">
              <div class="input-group-text" style="background-color: white; border-color:white;">Price:</div>
            </div>
            <input type="text" readonly class="form-control" id="Total_Harga" name="Total_Harga" value="<?= $pakaian["Harga_Pakaian"]; ?>" style="background-color: white; border-color: white;">
          </div>


          <select name="Ukuran_Pakaian" id="Ukuran_Pakaian" class="form-control mb-1">
            <option value="">Select Size</option>
            <?php foreach ($ukuran as $u) : ?>
              <option value="<?= $u; ?>"><?= $u; ?></option>
            <?php endforeach; ?>
          </select>
          <input type="number" class="form-control mb-1" id="Jumlah_Pakaian" name="Jumlah_Pakaian" placeholder="Quantity" style="width: 110px">
          <button type="submit" class="btn btn-success mb-1" name="tambah"><i class="fas fa-fw fa-cart-plus"></i> Add to Cart</button>
          <a href="<?= base_url() ?>user" class="btn btn-primary">Back</a>
        </form>
      </div>
      <h5>Decription :</h5>
      <h6><?= $pakaian["Deskripsi_Pakaian"]; ?></h6>
    </div>
  </div>
</div>