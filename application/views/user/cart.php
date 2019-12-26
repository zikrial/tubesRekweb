<div class="card mb-3 ml-3" style="max-width: 600px;">
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
        </tbody>
    </table>
</div>
<div class="m-3">
    <table>
        <tr>
            <td><a href="" class="btn btn-success">Pay Now</a></td>
            <td>Total : </td>
            <td>
                <h4><?= number_format($total, 2, ',', '.'); ?></h4>
            </td>
        </tr>
    </table>
</div>
</div>