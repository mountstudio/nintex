<nav class="navbar navbar-expand-lg navbar-light my-menu z-depth-0 bg-nintex-color">
    <a class="navbar-brand" style="width: 80px;" href="{{ route('home') }}"><img src="{{ asset('img/logo3.png') }}"
                                                                                 class="img-fluid" alt=""></a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-5 mr-auto mt-2 mt-lg-0 ">
            <li class="nav-item">
                <a class="nav-link text-uppercase" href="#" title="Одежда">Одежда</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase" href="#" title="Акссесуары">Акссесуары</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase" href="#" title="Акции">Акции</a>
            </li>
        </ul>
        <form class="form-inline md-form form-sm active-cyan-2 my-1">
            <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
                   aria-label="Search">
            <i class="fas fa-search" aria-hidden="true"></i>
        </form>
        <ul class="navbar-nav ml-5 mt-2 mt-lg-0">
            <li class="nav-item mr-4">
                <a href="#"
                   class="border-bottom-0 border-top-0 border-right-0 border-left-0 rounded-0 border-dark my-2 my-sm-0"><img
                        src="img/basket.svg" class="img-fluid" alt=""></a>
            </li>
            <li class="nav-item mr-4">
                <a href="#menu" class="border-bottom-0 border-top-0 border-right-0 border-left-0 rounded-0 border-dark my-2 my-sm-0"><img src="img/hamburber.svg" alt="" class="img-fluid"></a>
            </li>
            <li class="nav-item mr-4">
                <a href="{{ auth()->check() ? route('profile') : route('login') }}"
                   class="border-bottom-0 border-top-0 border-right-0 border-left-0 rounded-0 border-dark my-2 my-sm-0"><img
                        src="img/user_avatar.svg" class="img-fluid" alt=""></a>
            </li>
        </ul>
    </div>
</nav>
<nav id="menu">
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/work">Our work</a></li>
        <li><span>About us</span>
            <ul>
                <li><a href="/about/history">History</a></li>
                <li><span>The team</span>
                    <ul>
                        <li><a href="/about/team/management">Management</a></li>
                        <li><a href="/about/team/sales">Sales</a></li>
                        <li><a href="/about/team/development">Development</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><span>Services</span>
            <ul>
                <li><a href="/services/design">Design</a></li>
                <li><a href="/services/development">Development</a></li>
                <li><a href="/services/marketing">Marketing</a></li>
            </ul>
        </li>
        <li><a href="/contact">Contact</a></li>
    </ul>
</nav>
@push('styles')

@endpush
@push("scripts")

    <script>

                new Mmenu( "#menu", {
                    "extensions": [
                        "pagedim-black",
                        "position-right"
                    ],
                    "iconbar": {
                        "use": true,
                        "top": [
                            "<a href='#/'><i class='fa fa-home'></i></a>",
                            "<a href='#/'><i class='fa fa-user'></i></a>"
                        ],
                        "bottom": [
                            "<a href='#/'><i class='fab fa-twitter'></i></a>",
                            "<a href='#/'><i class='fab fa-facebook'></i></a>",
                            "<a href='#/'><i class='fab fa-linkedin'></i></a>"
                        ]
                    },
                    "navbars": [
                        {
                            "position": "top",
                            "content": [
                                "searchfield"
                            ]
                        },
                        {
                            "position": "bottom",
                            "content": [
                                "<a class='fas fa-envelope' href='#/'></a>",
                                "<a class='fab fa-twitter' href='#/'></a>",
                                "<a class='fab fa-facebook' href='#/'></a>"
                            ]
                        }
                    ]
                });
    </script>
@endpush

