<?php $topMenu = ['index' => ['title' => 'Home', 'uri' => '/index', 'with_auth' => false], 'bantuan' => ['title' => 'Bantuan', 'uri' => '/bantuan', 'with_auth' => true]]; ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <a class="navbar-brand" href="/">bantu.in</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php foreach ($topMenu as $controller => $menu) { ?>
                <?php if (($this->session->has('auth') && $menu['with_auth'] === true) || $menu['with_auth'] === false) { ?>
                    <?php if (($menu['title']) === ('Bantuan')) { ?>
                    <li class="nav-item dropdown <?php if ($controller == Phalcon\Text::lower($this->dispatcher->getControllerName())) { ?>active<?php } ?>">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Bantuan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <?php foreach ($kategori as $kat) { ?>
                            <a class="dropdown-item" href="/bantuan/kategori/<?= $kat->id ?>"><?= $kat->nama ?></a>
                            <?php } ?>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/bantuan">Semua</a>
                        </div>
                    </li>
                    <?php } else { ?>
                    <li class="nav-item <?php if ($controller == Phalcon\Text::lower($this->dispatcher->getControllerName())) { ?>active<?php } ?>">
                        <a class="nav-link" href="<?= $menu['uri'] ?>"><?= $menu['title'] ?></a>
                    </li>
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        </ul>

        <div class="my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <?php if ($this->session->has('auth')) { ?>
                    <?= $this->tag->linkTo(['user/logout', 'Log Out', 'class' => 'nav-link']) ?>
                    <?php } else { ?>
                    <?= $this->tag->linkTo(['user/login', 'Log In/Sign Up', 'class' => 'nav-link']) ?>
                    <?php } ?>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container">
    <?= $this->flash->output() ?>
    <?= $this->getContent() ?>
    <hr>
    <footer>
        <p>&copy; nvnrdhn <?= date('Y') ?></p>
    </footer>
</div>