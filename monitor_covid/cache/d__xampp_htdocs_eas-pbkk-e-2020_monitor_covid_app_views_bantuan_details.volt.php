<?= $this->flash->output() ?>
<div class="my-2 page-header">
    <h2>Detail Transaksi</h2>
</div>
<div class="my-4 row">
    <div class="col-6">
        <p class="my-1 text-left">ID Transaksi: #<?= $transaksi->id ?></p>
        <p class="my-1 text-left">Nama Penyumbang: <?= $transaksi->user->nama ?></p>
        <p class="my-1 text-left">Jumlah Bantuan: <?= $this->length($transaksi->bantuan) ?></p>
    </div>
    <div class="col-6">
        <p class="my-1 text-right">Tanggal Transaksi: <?= $transaksi->tgl_transaksi ?></p>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-hover">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID Bantuan</th>
                <th scope="col">Nama Bantuan</th>
                <th scope="col">Kategori</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Satuan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transaksi->bantuan as $bantuan) { ?>
            <tr>
                <th><?= $bantuan->id ?></td>
                <td><?= $bantuan->nama ?></td>
                <td><?= $this->tag->linkTo(['bantuan/kategori/' . $bantuan->kategori_id, $bantuan->kategori->nama]) ?></td>
                <td><?= number_format($bantuan->jumlah, 1, ',', '.') ?></td>
                <td><?= $bantuan->satuan ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>