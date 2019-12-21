@extends('admin.dashboard')

@section('dashboard_content')
    <div class="row justify-content-end mb-4">
        <div class="col-auto">
{{--            <a href="{{ route('admin.product.create') }}" class="btn btn-success">{{ __('Создать') }}</a>--}}
        </div>
    </div>
{{--    @dd($carts)--}}
    <table class="table table-bordered" id="carts-table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Action</th>
            <th>Created At</th>
            <th>Updated At</th>
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
        $(function() {
            var table = $('#carts-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.order.datatable.data') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'action', name: 'action' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'updated_at', name: 'updated_at' }
                ],
                'initComplete' : (settings, data) => {
                    $('.status-order').each((e, i) => {
                        registerSelectStatus($(i));
                    })
                }
            });
        });

        function registerSelectStatus(html) {
            html.change(e => {
                let select = $(e.currentTarget);
                let id = select.children('option:selected').data('id');
                let value = select.val();
                console.log(value);
            })
        }
    </script>

@endpush
