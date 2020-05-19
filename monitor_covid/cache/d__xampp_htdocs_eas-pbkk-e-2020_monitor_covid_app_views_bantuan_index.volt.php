<?= $this->flash->output() ?>
<div class="my-2 page-header row">
    <div class="col-6">
        <h2>Kategori: 
        <?php if (isset($selected_kategori)) { ?> <?= $selected_kategori->nama ?>
        <?php } else { ?> Semua
        <?php } ?>
        </h2>
    </div>
    <div class="col-6 text-right">
        <?= $this->tag->linkTo(['bantuan/create', '+ Tambah bantuan', 'class' => 'btn btn-primary btn-large btn-success']) ?>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-hover">
        <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Penyumbang</th>
                <th scope="col">Bantuan</th>
                <th scope="col">Kategori</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Satuan</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bantuan as $bantu) { ?>
            <tr>
                <th scope="row"><?= $bantu->id ?></th>
                <td><?= $bantu->transaksi->user->nama ?></td>
                <td><?= $bantu->nama ?></td>
                <td><?= $bantu->kategori->nama ?></td>
                <td><?= $bantu->jumlah ?></td>
                <td><?= $bantu->satuan ?></td>
                <td><?= $this->tag->linkTo(['bantuan/details/' . $bantu->id, 'Lihat detail transaksi']) ?></td>
            </tr>
            <?php } ?>
            <?php if ($this->length($bantuan) == 0) { ?>
            <tr>
                <th colspan="7" class="text-center">Data bantuan tidak ditemukan</th>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>