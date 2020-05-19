<div class="container mt-3">
    <?= $this->flash->output() ?>
    <div class="my-5 page-header text-center">
        <h2>Register for bantu.in</h2>
    </div>
    <?= $this->tag->form(['user/register']) ?>
        <fieldset>
            <div class="row justify-content-center">
                <div class="col-4 form-group">
                    <label for='nama'>
                        Nama
                    </label>

                    <div>
                        <?= $this->tag->textField(['nama', 'class' => 'form-control']) ?>
                    </div>
                </div>
            </div>
        
            <div class="row justify-content-center">
                <div class="col-4 form-group">
                    <label for='email'>
                        Email
                    </label>

                    <div>
                        <?= $this->tag->textField(['email', 'class' => 'form-control']) ?>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-4 form-group">
                    <label for='password'>
                        Password
                    </label>

                    <div>
                        <?= $this->tag->passwordField(['password', 'class' => 'form-control']) ?>
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-4">
                    <?= $this->tag->submitButton(['Register', 'class' => 'my-3 btn btn-primary btn-block']) ?>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-4">
                    Log in <?= $this->tag->linkTo(['user/login', 'disini']) ?> jika sudah memiliki akun.
                </div>
            </div>
        </fieldset>
    <?= $this->tag->endform() ?>
</div>