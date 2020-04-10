@extends('layouts.app')

@section('content')

    <div class="container">
        <p class="h2 text-center" style="margin-top: 20px;
    margin-bottom: 10px;">Условия сотрудничества для оптовиков</p>
        <div class="cooperation-steps">
            <div class="step">
                <div class="number">1</div>
                <div class="info">
                    <p>
                        Для того чтобы увидеть оптовые цены, Войдите или пройдите Регистрацию. Процедура
                        регистрации занимает 1 минуту, и вам сразу будут доступны оптовые цены.
                    </p>
                </div>
            </div>
            <div class="step">
                <div class="number">2</div>
                <div class="info">
                    <p>
                        Минимальная сумма оптового заказа – 5 000 руб.
                    </p>
                </div>
            </div>
            <div class="step">
                <div class="number">3</div>
                <div class="info">
                    <p>
                        Вы можете заказать только нужные вам размеры. Выкупать весь размерный ряд не обязательно.
                    </p>
                </div>
            </div>
            <div class="step">
                <div class="number">4</div>
                <div class="info">
                    <p>
                        Оформить заказ можно любым удобным для вас способом: написать на почту svetozara54@mail.ru или заполнить форму заказа на сайте.
                    </p>
                </div>
            </div>
            <div class="step">
                <div class="number">5</div>
                <div class="info">
                    <p>
                        Мы принимаем безналичный расчет.
                    </p>
                </div>
            </div>
            <div class="step">
                <div class="number">6</div>
                <div class="info">
                    <p>
                        Наша компания работает с юридическими лицами, индивидуальными предпринимателями и организаторами СП.
                    </p>
                </div>
            </div>
            <div class="step">
                <div class="number">7</div>
                <div class="info">
                    <p>
                        Мы отправляем заказы во все регионы России. До транспортной компании товар доставляется бесплатно.
                    </p>
                </div>
            </div>
        </div>

        <p class="h2 text-center" style="margin-top: 20px;margin-bottom: 10px;">Реквизиты</p>
        <blockquote style="padding: 10px 20px;margin: 0 0 20px;font-size: 18px;border-left:5px solid #eee;">
            <p>Индивидуальный предприниматель Арыкова Нурайым Нурмамбековна</p>
            <p>ОГНИП 309541003400017</p>
            <p>ИНН 541001781566</p>
            <p>Дата присвоения ОГНИП 03.02.2019г.</p>
            <p>ОКВЭД 46.42&nbsp;</p>
        </blockquote>
        <p class="h2 text-center" style="margin-top: 20px;margin-bottom: 10px;">Часто задаваемые вопросы:</p>
        <div class="accordion" id="accordionExample">
            <div class="card z-depth-0 bordered">
                <div class="card-header" data-toggle="collapse" data-target="#collapseOne"
                     aria-expanded="true" aria-controls="collapseOne" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button">
                            Как узнать оптовые цены?
                        </button>
                        <i class="fas fa-angle-down rotate-icon"></i>
                    </h5>

                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                     data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    </div>
                </div>
            </div>
            <div class="card z-depth-0 bordered">
                <div class="card-header" data-toggle="collapse"
                     data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" id="headingTwo">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button">
                            Есть ли возможность бронировать товар?
                        </button>
                        <i class="fas fa-angle-down rotate-icon"></i>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    </div>
                </div>
            </div>
            <div class="card z-depth-0 bordered">
                <div class="card-header" data-toggle="collapse"
                     data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" id="headingThree">
                    <h5 class="mb-0">
                        <button class="btn btn-link " type="button">
                            Как быстро происходит отгрузка ?
                        </button>
                        <i class="fas fa-angle-down rotate-icon"></i>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    </div>
                </div>
            </div>
            <div class="card z-depth-0 bordered">
                <div class="card-header" data-toggle="collapse"
                     data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" id="headingFour">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed" type="button">
                            Как быстро происходит отгрузка ?
                        </button>
                        <i class="fas fa-angle-down rotate-icon"></i>
                    </h5>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    </div>
                </div>
            </div>
            <div class="card z-depth-0 bordered">
                <div class="card-header" data-toggle="collapse"
                     data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive" id="headingFive">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button">
                            Товар в наличии или отшиваете под заказ?
                        </button>
                        <i class="fas fa-angle-down rotate-icon"></i>
                    </h5>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    </div>
                </div>
            </div>
            <div class="card z-depth-0 bordered">
                <div class="card-header" data-toggle="collapse"
                     data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix" id="headingSix">
                    <h5 class="mb-0">
                        <button class="btn btn-link" type="button">
                            Что делать в случае брака/пересорта?
                        </button>
                        <i class="fas fa-angle-down rotate-icon"></i>
                    </h5>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
