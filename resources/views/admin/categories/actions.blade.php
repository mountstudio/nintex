<div class="row justify-content-center">
    <div class="col-5">
        <form method="POST" action="{{ route('admin.category.destroy', $category) }}">
            @csrf
            @method('DELETE')
            <button type="submit" title="{{ __('Удалить') }}" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i>
            </button>
        </form>
    </div>
    <div class="col-7">
        <form action="">
            <a href="{{ route('admin.category.edit', $category) }}" class="btn btn-primary ml-1 btn-sm" style="margin-top: 5px;"><i class="fas fa-pen"></i></a>
        </form>
    </div>
</div>
