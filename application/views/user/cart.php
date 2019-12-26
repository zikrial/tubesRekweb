<?= $this->session->flashdata('message'); ?>
<div class="card mb-3 ml-3" style="max-width: 600px;">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Type</th>
                <th scope="col">Size</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 0;
            $total = 0; ?>


            <?php foreach ($transaksi as $t) : ?>
                <tr>
                    <td><?= ++$i; ?></td>
                    <td><?= $t['Nama_Pakaian'] ?></td>
                    <td><?= $t['Jenis_Pakaian'] ?></td>
                    <td><?= $t['Ukuran_Pakaian'] ?></td>
                    <td><?= $t['Jumlah_Pakaian'] ?></td>
                    <td><?= number_format($t["Total_Harga"], 2, ',', '.'); ?></td>
                    <td>
                        <a href="<?= base_url('user/deleteCart/') . $t['Id_Transaksi'] ?>" class="badge badge-danger" onclick="return confirm('Are you sure ?');">delete</a>
                    </td>
                </tr>
                <?php $total += $t["Total_Harga"] ?>
            <?php endforeach; ?>
            <?php if ($i == 0) : ?>
                <tr>
                    <td colspan="6">
                        The cart is currently empty, order something
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<div class="m-3">
    <table>
        <tr>
            <td>
                <form action="<?= base_url('user/payProduk'); ?>" method="post">
                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                    <input type="hidden" name="saldo" value="<?= $user['saldo'] ?>">
                    <input type="hidden" name="total" value="<?= $total ?>">
                    <button type="submit" class="btn btn-success" name="payProduk">Pay Now</button>
                </form>
            </td>
            <td>
                <a href="<?= base_url('user/cancelTransaksi') ?>" class="btn btn-danger tombol-cancel" name="cancelTransaksi">Cancel</a>
            </td>
            <td>Total : </td>
            <td>
                <h4><?= number_format($total, 2, ',', '.'); ?></h4>
            </td>
        </tr>
    </table>
</div>
</div>