<?= $this->flash->output() ?>
<?= $this->tag->form(['user/register']) ?>
    <fieldset>
        <div>
            <label for='nama'>
                Nama
            </label>

            <div>
                <?= $this->tag->textField(['nama']) ?>
            </div>
        </div>

        <div>
            <label for='email'>
                Email
            </label>

            <div>
                <?= $this->tag->textField(['email']) ?>
            </div>
        </div>

        <div>
            <label for='password'>
                Password
            </label>

            <div>
                <?= $this->tag->passwordField(['password']) ?>
            </div>
        </div>

        <div>
            <?= $this->tag->submitButton(['Register']) ?>
        </div>
    </fieldset>
<?= $this->tag->endform() ?>