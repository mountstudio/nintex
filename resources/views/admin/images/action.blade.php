<div class="row justify-content-center">
    <div class="col-5">
        <form method="POST" action="{{ route('admin.image.destroy', $image) }}">
            @csrf
            @method('DELETE')
            <button type="submit" title="{{ __('Удалить') }}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i>
            </button>
        </form>
    </div>
</div>
