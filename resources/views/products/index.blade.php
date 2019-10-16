@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-2 h-100 bg-secondary">
                text
            </div>

            <div class="col-10">
                <div class="row px-2">
                    @foreach($products as $product)
                        <div class="col-3">
                            @include('products.card')
                        </div>
                    @endforeach
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination pagination-circle pg-blue">
                        <li class="page-item disabled"><a class="page-link">First</a></li>
                        <li class="page-item disabled">
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
                        <li class="page-item"><a class="page-link">Last</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    @include('partials.footer')
@endsection
