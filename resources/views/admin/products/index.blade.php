@extends('admin.dashboard')

@section('dashboard_content')
    <div class="row justify-content-end mb-4">
        <div class="col-auto">
            <a href="{{ route('admin.product.create') }}" class="btn btn-success">{{ __('Создать') }}</a>
        </div>
    </div>
    <table class="table table-bordered" id="products-table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Action</th>
            <th>Hit</th>
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
            $('#products-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.product.datatable.data') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'title', name: 'title' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'updated_at', name: 'updated_at' },
                    { data: 'action', name: 'action' },
                    { data: 'checkbox', name: 'checkbox', orderable: false, searchable: false }
                ]
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $(document).on('click', '.check', function(){
                let check = $(this).val();
                let id = $(this).attr('id');
                console.log(check, id);
                $.ajax({
                    url: "{{ route('cart.checkbox') }}",
                    method: 'post',
                    data: {
                        value: check,
                        id: id
                    },
                    success: data => {
                        console.log(data, 'Успех');
                    },
                    error: data => {
                      console.log(data, 'Ошибка');
                    }
                })
            })
        })

    </script>
@endpush
