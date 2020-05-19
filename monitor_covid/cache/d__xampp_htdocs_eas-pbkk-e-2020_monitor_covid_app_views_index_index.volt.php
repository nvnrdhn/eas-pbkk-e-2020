<?= $this->flash->output() ?>
<div class="jumbotron">
    <h1>Welcome to bantu.in!</h1>
    <p>Bantu.in adalah aplikasi web sederhana untuk monitoring bantuan-bantuan yang ditujukan untuk pandemik covid-19.
        Disini Anda bisa melihat daftar-daftar bantuan yang tersimpan pada sistem. Anda juga bisa menambahkan bantuan.</p>
    <p><?= $this->tag->linkTo(['user/register', 'Coba sekarang!', 'class' => 'btn btn-primary btn-large btn-success']) ?></p>
</div>

<div class="row">
    <div class="col-md-4">
        <h2>Monitor Daftar Bantuan</h2>
        <p>Lihat semua bantuan-bantuan yang terdaftar pada sistem. Anda bisa melihat bantuan berdasarkan kategorinya. Anda juga bisa melihat detail transaksi bantuan yang terkait.</p>
    </div>
    <div class="col-md-4">
        <h2>Tambahkan Bantuan</h2>
        <p>Masukkan data-data bantuan Anda sehingga orang lain mudah untuk memonitor.</p>
    </div>
    <div class="col-md-4">
        <h2>Lihat Detail Transaksi</h2>
        <p>Anda bisa melihat detail transaksi bantuan yang dilakukan oleh orang lain. Dalam satu transaksi bisa terdapat banyak bantuan didalamnya.</p>
    </div>
</div>