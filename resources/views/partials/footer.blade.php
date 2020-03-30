<footer class="bg-dark position-relative" style="margin-top: 20px;">
    <div class="container">
        <div class="row justify-content-center py-4">
            <div class="col-12 col-md-4 col-lg-2">
                <p class="h3 text-white">
                    Навигация
                </p>
                <nav class="nav flex-column  text-center mx-auto mx-md-0">
                    <a class="text-white mr-auto footer-hov fz-footer mb-1" href="{{ route('home') }}" title="">- ГЛАВНАЯ</a>
                    <a class="text-white mr-auto footer-hov fz-footer mb-1" href="{{ route('product.discount') }}" title="">-
                        АКЦИИ</a>
                    <a class="text-white mr-auto footer-hov fz-footer mb-1" href="{{ route('product.hit') }}" title="">-
                        ХИТЫ</a>
                    <a class="text-white mr-auto footer-hov fz-footer mb-1" href="{{ route('product.index2') }}" title="">-
                        НОВИНКИ</a>
                </nav>
            </div>
            <div class="col-12 col-md-4 col-lg-2">
                <p class="h3 text-white">
                    Категории
                </p>
                <nav class="nav flex-column text-center mx-auto mx-md-0">
                    @foreach($categories as $category)
                        <a class="text-white mr-auto fz-footer hover-categ"
                           href="{{ route('product.index', ['allCatalog['. $category->id .']' => 'on']) }}"
                           title="">- {{$category->title}}</a>
                    @endforeach
                </nav>
            </div>
            <div class="d-none d-lg-block col-lg-4">
                <p class="h3 text-white">
                    Частые вопросы
                </p>
                <ul class="nav flex-column">
                    <li class="nav-item ">
                        <a href="" class="text-white mr-auto footer-hov fz-footer">
                            - Как узнать оптовые цены?
                        </a>
                    </li>
                    <li class="nav-item my-1">
                        <a href="" class="text-white mr-auto footer-hov  fz-footer">
                            - Есть ли возможность бронировать товар?
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="" class="text-white mr-auto footer-hov fz-footer">
                            - Как быстро происходит отгрузка ?
                        </a>
                    </li>
                    <li class="nav-item my-1">
                        <a href="" class="text-white mr-auto footer-hov  fz-footer">
                            - Товар в наличии или отшиваете под заказ?
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-4 col-lg-4">
                <p class="h3 text-white">
                    Контакты
                </p>
                <ul class="nav flex-column">
                    <li>
                        <div class="row">
                            <div class="col-12 col-xl-6">
                                <p class="text-white mt-1 mb-0 fz-footer">Подписаться на рассылку</p>
                            </div>
                            <div class="col-12 col-xl-6 position-relative">
                                <form action="{{ route('email.store') }}" method="post">
                                    @csrf
                                    <input type="text" name="email" style="height: 27px;">
                                    <button type="submit" class="position-absolute pos-img p-0" style="height: 27px">
                                        <img src="{{ asset('img/mail.svg') }}" width="22" height="21" alt="">
                                    </button>

                                </form>
                            </div>

                        </div>
                        <hr>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-white d-flex px-0 hover-contact"
                           title="Контактный номер и График работы">
                            <img src="{{ asset('icons/call_1.svg') }}" alt="Номер">&nbsp;
                            <p class="mb-1 font-weight-bold pl-1 fz-footer py-2">+996555449342</p>
                            {{--<p class="m-0 text-muted pl-1 fz-footer">Пн. – Сб.: с 9:00 до 18:00 (+6 GMT)</p>--}}
                            {{--                            <div class="col-12">--}}
                            {{--                                --}}
                            {{--                            </div>--}}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-white d-flex px-0 hover-contact" title="Электронная почта">
                            <img src="{{ asset('icons/mail.svg') }}" alt="Почта">&nbsp;
                            <p class="mb-1 font-weight-bold pl-1 fz-footer">nintexkg@gmail.com</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link text-white d-flex px-0 hover-contact" title="Наш адрес">
                            <img src="{{ asset('icons/placeholder_1.svg') }}" alt="Адрес">
                            <p class="mb-1 font-weight-bold pl-1 fz-footer">Кыргызстан, г. Бишкек,
                                ул. Проспект Мира 120
                            </p>
                        </a>
                    </li>
                    <!-- Убрал подписаться на рассылки -->
                    {{--<li class="nav-item">
                        <div class="row pb-3">
                            <div class="col-12 col-xl-6">
                                <input type="text" class="form-control" placeholder="example@example.com">

                            </div>
                            <div class="col-12 col-xl-4 text-center my-2">
                                <div class="input-group-append d-none d-xl-block">
                                    <span class="input-group-text" title="Подписаться на рассылку"><i class="fas fa-envelope prefix"></i></span>
                                </div>
                                <div class="input-group-append d-block d-xl-none">
                                    <a href="#" class="btn-dark "> Подписаться на рассылку </a>
                                </div>
                            </div>
                        </div>
                    </li>--}}
                </ul>
            </div>
            <div class="col-12 d-flex justify-content-center mt-3 mb-2 text-white">
                @include('partials.socialnetworks')
            </div>
        </div>
    </div>


    </div>

    </div>
</footer>
