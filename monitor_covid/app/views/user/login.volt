<div class="container mt-3">
    {{ flash.output() }}
    <div class="my-5 page-header text-center">
        <h2>Log in ke bantu.in</h2>
    </div>
    {{ form('user/login') }}
        <fieldset>
            <div class="row justify-content-center">
                <div class="col-4 form-group">
                    <label for='email'>
                        Email
                    </label>

                    <div>
                        {{ text_field('email', 'class':'form-control') }}
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-4 form-group">
                    <label for='password'>
                        Password
                    </label>

                    <div>
                        {{ password_field('password', 'class':'form-control') }}
                    </div>
                </div>
            </div>
            
            <div class="row justify-content-center">
                <div class="col-4">
                    {{ submit_button('Login', 'class': 'my-3 btn btn-primary btn-block') }}
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-4">
                    Daftar {{link_to('user/register', 'disini')}} jika belum memiliki akun.
                </div>
            </div>
        </fieldset>
    {{ endForm() }}
</div>