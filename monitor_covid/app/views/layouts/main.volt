{% set topMenu = [
    'index': [
        'title': 'Home',
        'uri': '/index',
        'with_auth': false
    ],
    'bantuan': [
        'title': 'Bantuan',
        'uri': '/bantuan',
        'with_auth': true
    ]
] %}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-3">
    <a class="navbar-brand" href="/">bantu.in</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            {% for controller, menu in topMenu %}
                {% if (session.has('auth') and menu['with_auth'] === true) or menu['with_auth'] === false %}
                    {% if menu['title'] is sameas('Bantuan') %}
                    <li class="nav-item dropdown {% if controller == dispatcher.getControllerName()|lower %}active{% endif %}">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Bantuan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            {% for kat in kategori %}
                            <a class="dropdown-item" href="/bantuan/kategori/{{kat.id}}">{{kat.nama}}</a>
                            {% endfor %}
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/bantuan">Semua</a>
                        </div>
                    </li>
                    {% else %}
                    <li class="nav-item {% if controller == dispatcher.getControllerName()|lower %}active{% endif %}">
                        <a class="nav-link" href="{{ menu['uri'] }}">{{ menu['title'] }}</a>
                    </li>
                    {% endif %}
                {% endif %}
            {% endfor %}
        </ul>

        <div class="my-2 my-lg-0">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    {% if session.has('auth') %}
                    {{link_to('user/logout', 'Log Out', 'class':'nav-link')}}
                    {% else %}
                    {{link_to('user/login', 'Log In/Sign Up', 'class':'nav-link')}}
                    {% endif %}
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container">
    {{ flash.output() }}
    {{ content() }}
    <hr>
    <footer>
        <p>&copy; nvnrdhn {{ date('Y') }}</p>
    </footer>
</div>