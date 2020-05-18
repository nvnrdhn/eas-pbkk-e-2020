<?= $this->flash->output() ?>
<div class="page-header">
    <h1>Web Bantuan COVID-19</h1>
</div>

<p>Silahkan <?= $this->tag->linkTo(['user/login', 'login']) ?> untuk mengakses sistem.</p>

<p>Daftar <?= $this->tag->linkTo(['user/register', 'disini']) ?> jika belum memiliki akun.</p>
