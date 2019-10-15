@extends('layouts.app')

@section('content')

    <div class="container">
        <p class="h2 text-center">Условия сотрудничества для оптовиков</p>

        <p class="h2 text-center">Реквизиты</p>
        <blockquote style="padding: 10px 20px;
    margin: 0 0 20px;
    font-size: 18px;
    border-left: 5px solid #eee;">
            <p>Индивидуальный предприниматель Арыкова Нурайым Нурмамбековна</p>
            <p>ОГНИП 309541003400017</p>
            <p>ИНН 541001781566</p>
            <p>Дата присвоения ОГНИП 03.02.2019г.</p>
            <p>ОКВЭД 46.42&nbsp;</p>
        </blockquote>
        <p class="h2 text-center">Часто задаваемые вопросы:</p>
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
