<div class="container-fluid px-0 " style="background: #E5E5E5;">
    <nav class="navbar navbar-expand-lg navbar-light my-menu bg-transparent">
        <a class="navbar-brand" href="#"><img src="img/logo.png" class="img-fluid" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ">
                <li class="nav-item active">
                    <a class="nav-link text-uppercase" href="#" title="Одежда">Одежда</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="#" title="Акссесуары">Акссесуары</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-uppercase" href="#" title="Акции">Акции</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 position-relative">
                <input class="form-control mr-md-0 mr-sm-2 border-dark border-top-0 border-right-0 border-left-0 rounded-0" style="background:#E5E5E5;width: 280px!important" type="search" placeholder="Search">
                <button class="bg-transparent border-bottom-0 border-top-0 border-right-0 border-left-0 rounded-0 my-2 my-sm-0 position-absolute" style="right: 0px; z-index: 5;" type="submit"><img src="img/search.png" class="img-fluid w-75" alt=""></button>
            </form>

            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

                <li class="nav-item mr-4">
                    <a href="#" class="border-bottom-0 border-top-0 border-right-0 border-left-0 rounded-0 border-dark my-2 my-sm-0"><img src="img/basket.svg" class="img-fluid" alt=""></a>
                </li>
                <li class="nav-item mr-4">
                    <a href="#" class="border-bottom-0 border-top-0 border-right-0 border-left-0 rounded-0 border-dark my-2 my-sm-0"><img src="img/user_avatar.svg" class="img-fluid" alt=""></a>
                </li>
            </ul>

        </div>

    </nav>

</div>
@push("scripts")
    <script>
        document.addEventListener(
            "DOMContentLoaded", () => {
                new Mmenu( "#my-menu", {
                    wrappers: ["bootstrap"]
                });
            }
        );
    </script>
@endpush
