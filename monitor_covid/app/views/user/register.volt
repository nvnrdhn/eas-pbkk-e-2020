{{ flash.output() }}
{{ form('user/register') }}
    <fieldset>
        <div>
            <label for='nama'>
                Nama
            </label>

            <div>
                {{ text_field('nama') }}
            </div>
        </div>

        <div>
            <label for='email'>
                Email
            </label>

            <div>
                {{ text_field('email') }}
            </div>
        </div>

        <div>
            <label for='password'>
                Password
            </label>

            <div>
                {{ password_field('password') }}
            </div>
        </div>

        <div>
            {{ submit_button('Register') }}
        </div>
    </fieldset>
{{ endForm() }}