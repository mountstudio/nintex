<!-- Default unchecked -->
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input check-image" @if($image->active === 1) checked @endif id="{{ $image->id }}">
    <label class="custom-control-label" style="margin-top: 12px; margin-left: 12px;" for="{{ $image->id }}"></label>
</div>
