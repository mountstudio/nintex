<div class="list-group">
    <a href="{{ route('profile') }}" class="list-group-item list-group-item-action active">{{ __('Профиль') }}</a>
    <a href="#!" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
    <a href="#!" class="list-group-item list-group-item-action">Morbi leo risus</a>
    <a href="#!" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
    <a href="#" onclick="event.preventDefault();$('.logout-form').submit();" class="list-group-item list-group-item-action text-danger">{{ __('Выход') }}</a>
</div>
<form action="{{ route('logout') }}" method="POST" class="d-none logout-form">
    @csrf
</form>
