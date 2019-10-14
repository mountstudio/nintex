<div class="list-group">
    <a href="{{ route('profile') }}" class="list-group-item list-group-item-action {{ request()->is('profile') ? 'active' : '' }}">{{ __('Профиль') }}</a>
    <a href="{{ route('user.shopping') }}" class="list-group-item list-group-item-action {{ request()->is('profile/shopping') ? 'active' : '' }}">История заказов</a>
    <a href="{{ route('user.favorites') }}" class="list-group-item list-group-item-action {{ request()->is('profile/favorites') ? 'active' : '' }}">Избранное</a>
    <a href="#!" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
    <a href="#" onclick="event.preventDefault();$('.logout-form').submit();" class="list-group-item list-group-item-action text-danger">{{ __('Выход') }}</a>
</div>
<form action="{{ route('logout') }}" method="POST" class="d-none logout-form">
    @csrf
</form>
