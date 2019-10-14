<div class="alert alert-{{ \Illuminate\Support\Facades\Session::get('status')['status'] == 'success' ? 'success' : 'danger' }} alert-dismissible fade show position-fixed" style="z-index: 9; max-width: 400px; right: 0;" role="alert">
    {{ \Illuminate\Support\Facades\Session::get('status')['message'] }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
