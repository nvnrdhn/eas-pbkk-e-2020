<div class="container mt-3">
    <?= $this->flash->output() ?>
    <div class="my-5 page-header text-center">
        <h2>Log in</h2>
    </div>
    <?= $this->tag->form(['user/login']) ?>
        <fieldset>
            <div class="row justify-content-center">
                <div class="col-4 form-group">
                    <label for='email'>
                        Email
                    </label>

                    <div>
                        <?= $this->tag->textField(['email', 'class' => 'form-control', 'required' => '']) ?>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-4 form-group">
                    <label for='password'>
                        Password
                    </label>

                    <div>
                        <?= $this->tag->passwordField(['password', 'class' => 'form-control', 'required' => '']) ?>
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-4">
                    <?= $this->tag->submitButton(['Login', 'class' => 'my-3 btn btn-primary btn-block']) ?>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-4">
                    Daftar <?= $this->tag->linkTo(['user/register', 'disini']) ?> jika belum memiliki akun.
                </div>
            </div>
        </fieldset>
    <?= $this->tag->endform() ?>
</div>