@extends('layouts.app')

@section('content')

    <div class="main-container">
        <div class="row">
            <div class="col-12 col-md-3 my-5">
                @include('catalog_blocks.nav_category')
                @include('catalog_blocks.filters')
            </div>
            <div class="col-12 col-md-9 my-5">
                @include('catalog_blocks.product_card')
                <nav class="d-flex justify-content-center">
                    <ul class="pagination pg-teal">
                        <li class="page-item">
                            <a class="page-link" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link">1</a></li>
                        <li class="page-item"><a class="page-link">2</a></li>
                        <li class="page-item"><a class="page-link">3</a></li>
                        <li class="page-item"><a class="page-link">4</a></li>
                        <li class="page-item"><a class="page-link">5</a></li>
                        <li class="page-item">
                            <a class="page-link" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
{{--    <script>--}}
{{--        let params = [];//Create new array, in this array we save our parametrs--}}
{{--        $('input[name="categories[]"]').change(e => {//--}}
{{--            let input = $(e.currentTarget);--}}
{{--            let isChecked = input.is(':checked') ? true : false;--}}
{{--            let id = input.data('id');--}}
{{--            isChecked ? params.push(id) : params.splice($.inArray(id, params), 1);--}}
{{--            params.page = 1;--}}
{{--            console.log(params);--}}
{{--            fetchProductions(params);--}}
{{--        });--}}
{{--        function fetchProductions(params) {--}}
{{--            console.log(params);--}}
{{--            $.ajax({--}}
{{--                url: '{{ route('productions.filter') }}',--}}
{{--                data: {--}}
{{--                    params: params,--}}
{{--                    page: params.page,--}}
{{--                    type: '{{ request('type') }}'--}}
{{--                },--}}
{{--                success: data => {--}}

{{--                    let pagination = $('ul.pagination');--}}
{{--                    pagination.empty();--}}
{{--                    if (data.count) {--}}
{{--                        let paginationDots = paginationWithDots(data.productions.current_page, data.productions.last_page);--}}
{{--                        if (data.productions.last_page > 1) {--}}
{{--                            if (data.productions.current_page != 1) {--}}
{{--                                pagination.append('<li class="page-item d-none d-sm-inline-block"><a class="page-link" data-page="' + (data.productions.current_page - 1) + '" href="#">Пред</a></li>');--}}
{{--                            }--}}
{{--                        }--}}
{{--                        for (let item of paginationDots) {--}}
{{--                            console.log(item, data.productions.current_page);--}}
{{--                            if (item == '...') {--}}
{{--                                console.log(item == '...');--}}
{{--                                pagination.append('<li class="page-item disabled"><a class="page-link disabled" disabled onclick="event.preventDefault()">' + item + '</a></li>');--}}
{{--                            } else if (item == data.productions.current_page) {--}}
{{--                                pagination.append('<li class="page-item active"><a class="page-link" data-page="' + item + '" href="#">' + item + '</a></li>');--}}
{{--                            } else {--}}
{{--                                pagination.append('<li class="page-item"><a class="page-link" data-page="' + item + '" href="#">' + item + '</a></li>');--}}
{{--                            }--}}
{{--                        }--}}
{{--                        if (data.productions.last_page > 1) {--}}
{{--                            if (data.productions.current_page != data.productions.last_page) {--}}
{{--                                pagination.append('<li class="page-item d-none d-sm-inline-block"><a class="page-link" data-page="' + (data.productions.current_page + 1) + '" href="#">След</a></li>');--}}
{{--                            }--}}
{{--                        }--}}
{{--                    }--}}
{{--                    pagination.find('.page-link').each((e, i) => {--}}
{{--                        registerPageButtons($(i));--}}
{{--                    });--}}

{{--                    Tilek Kubanov, [04.12.19 18:03]--}}
{{--                    let result = $('#productions-list').hide().html(data.html).fadeIn('fast');--}}
{{--                    @if(auth()->check())--}}
{{--                    result.find('.favorite').each((e, i) => {--}}
{{--                        registerFavoriteButton($(i));--}}
{{--                    });--}}
{{--                    @endif--}}
{{--                    result.find('.call-btn').each((e, i) => {--}}
{{--                        registerCallButton($(i));--}}
{{--                    });--}}
{{--                    result.find('.div-lazy').each((e, i) => {--}}
{{--                        registerLazyLoad($(i));--}}
{{--                    })--}}
{{--                },--}}
{{--                error: () => {--}}
{{--                    console.log('error');--}}
{{--                }--}}
{{--            })--}}
{{--        }--}}
{{--        function registerLazyLoad(item) {--}}
{{--            item.lazy();--}}
{{--        }--}}
{{--        @if(auth()->check())--}}
{{--        function registerFavoriteButton(item) {--}}
{{--            item.click((e) => {--}}
{{--                e.preventDefault();--}}
{{--                let btn = $(e.currentTarget);--}}
{{--                let id = btn.data('id');--}}
{{--                console.log(id);--}}
{{--                $.ajax({--}}
{{--                    method: "POST",--}}
{{--                    url: '{{ route('production.favorite') }}',--}}
{{--                    data: {--}}
{{--                        'id': id,--}}
{{--                        'user_id': '{{ \Illuminate\Support\Facades\Auth::user()->id }}'--}}
{{--                    },--}}
{{--                    success: data => {--}}
{{--                        console.log(data);--}}
{{--                        if (data.status === 'success') {--}}
{{--                            if (data.isFavorited) {--}}
{{--                                btn.find('.fa-heart').removeClass('far').addClass('fas');--}}
{{--                            } else {--}}
{{--                                btn.find('.fa-heart').removeClass('fas').addClass('far');--}}
{{--                            }--}}
{{--                        }--}}
{{--                    },--}}
{{--                    error: () => {--}}
{{--                        console.log('error');--}}
{{--                    }--}}
{{--                })--}}
{{--            });--}}
{{--        }--}}
{{--        @endif--}}
{{--        function registerCallButton(item) {--}}
{{--        }--}}
{{--        fetchProductions(params);--}}
{{--    </script>--}}
@endpush
