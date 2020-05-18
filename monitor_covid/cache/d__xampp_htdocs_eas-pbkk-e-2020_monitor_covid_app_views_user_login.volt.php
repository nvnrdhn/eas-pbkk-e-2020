<?= $this->flash->output() ?>
<?= $this->tag->form(['user/login']) ?>
    <fieldset>
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
            <?= $this->tag->submitButton(['Login']) ?>
        </div>
    </fieldset>
<?= $this->tag->endform() ?>