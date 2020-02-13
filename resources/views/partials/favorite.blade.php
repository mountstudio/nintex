<a href="{{ $route ?? '#' }}"
   {{ $data ?? '' }} class="{{ isset($bootstrap3) && $bootstrap3 ? 'btn-danger' : '' }} btn btn-white btn-block mt-2 mt-xl-4 favorite
{{ $class ?? '' }}" id="favorite_button">
    В избранное
</a>

