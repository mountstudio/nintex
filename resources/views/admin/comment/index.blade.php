@extends('admin.dashboard')

@section('dashboard_content')
    <div class="row justify-content-end mb-4">
        <div class="col-auto">
            <a href="{{ route('admin.product.create') }}" class="btn btn-success">{{ __('Создать') }}</a>
        </div>
    </div>
    {{--    @dd($carts)--}}
    <table class="table table-bordered" id="comment-table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Comment</th>
            <th>Email</th>
            <th>Name</th>
            <th>Product</th>
            <th>Action</th>
        </tr>
        </thead>
    </table>
@endsection

@push('styles')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endpush

@push('scripts')
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script>
        $(function(){
            var table = $('#comment-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.comment.datatable.data') !!}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'comment', name: 'comment'},
                    {data: 'email', name: 'email'},
                    {data: 'name', name: 'name'},
                    {data: 'product.title', name: 'product.title'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ],
                'initComplete' : (settings, data) => {
                    $('.status-order').each((e, i) => {
                        registerSelectStatus($(i));
                    });
                }
            })
        })
    </script>
@endpush
