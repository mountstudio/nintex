@extends('admin.dashboard')

@section('dashboard_content')
    <div class="row justify-content-end mb-4">
        <div class="col-auto">
            <a href="{{ route('admin.image.create') }}" class="btn btn-success">{{ __('Создать') }}</a>
        </div>
    </div>
    {{--    @dd($carts)--}}
    <table class="table table-bordered" id="image-table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Active</th>
            <th>Action</th>
            <th>Email</th>
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
            var table = $('#image-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.image.datatable.data') !!}',
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'action', name: 'action'},
                    {data: 'checkbox', name: 'checkbox'},
                    {data: 'act', name: 'act'},
                    {data: 'send', name: 'send'},

                ],
                'initComplete' : (settings, data) => {
                    $('.status-order').each((e, i) => {
                        registerSelectStatus($(i));
                    });
                }
            })
        })
    </script>
    <script>
        $(document).ready(function () {
            $(document).on('click', '.check-image', function(){
                let check = $(this).val();
                let id = $(this).attr('id');
                console.log(check, id);
                $.ajax({
                    url: "{{ route('image.checkbox') }}",
                    method: 'POST',
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
    <script>
        $(document).ready(function() {
            $(document).on('click', '.send', function () {
                let id = $(this).attr('id');
                $.ajax({
                    url: "{{ route('image.send') }}",
                    method: 'post',
                    data: {
                        id: id,
                    },
                    success: data=> {
                        console.log(data, 'Успех');
                    },
                    error: data => {
                        console.log(data, 'Error');
                    }
                })
            })
        })
    </script>
@endpush
