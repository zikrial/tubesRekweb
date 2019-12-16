<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
    <img src="<?= base_url('assets/img/pakaian/') . $pakaian['Gambar_Pakaian'] ?>" class="card-img" style = "width: 100%">
    </div>
    <div class="col-md-8">
      <div class="card-body">
       
        <h5 class="card-title">Detail Pakaian</h5>
        <h5 class="card-title">Nama Pakaian : <?= $pakaian['Nama_Pakaian'];?></h5>
                <h6 class="card-subtitle mb-2 text-muted">Merk Pakaian : <?= $pakaian['Merk_Pakaian']?></h6>
                <hr>
                <p class="card-text">Jenis Pakaian :<?= $pakaian['Jenis_Pakaian'];?></p>
                <hr>
                <p class="card-text">Deskripsi :<?= $pakaian['Deskripsi_Pakaian'];?></p>
                <hr>
                <p class="card-text">Jenis Pakaian :<?= $pakaian['Harga_Pakaian'];?></p>
                <hr>
                <a href="<?=base_url()?>user" class="btn btn-primary">Kembali</a>
      </div>
    </div>
  </div>
</div>