<div class="container mt-3">
    {{ flash.output() }}
    <div class="my-5 page-header text-center">
        <h2>Register</h2>
    </div>
    {{ form('user/register') }}
        <fieldset>
            <div class="row justify-content-center">
                <div class="col-4 form-group">
                    <label for='nama'>
                        Nama
                    </label>

                    <div>
                        {{ text_field('nama', 'class':'form-control') }}
                    </div>
                </div>
            </div>
        
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
                    {{ submit_button('Register', 'class': 'my-3 btn btn-primary btn-block') }}
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-4">
                    Log in {{link_to('user/login', 'disini')}} jika sudah memiliki akun.
                </div>
            </div>
        </fieldset>
    {{ endForm() }}
</div>