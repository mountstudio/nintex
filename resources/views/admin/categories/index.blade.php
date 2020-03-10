@extends('admin.dashboard')

@section('dashboard_content')
    <div class="row justify-content-end mb-4">
        <div class="col-auto">
            <a href="{{ route('admin.category.create') }}" class="btn btn-success">{{ __('Создать') }}</a>
        </div>
    </div>
    <table class="table table-bordered" id="categories-table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Actions</th>
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
            $('#categories-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('admin.category.datatable.data') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'title', name: 'title' },
                    { data: 'action', name: 'action' },
                ]
            });
        });
    </script>
@endpush
