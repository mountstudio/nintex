<!-- Default unchecked -->
<div class="custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input check" @if($product->hit === 1) checked @endif id="{{ $product->id }}">
    <label class="custom-control-label" style="margin-top: 12px; margin-left: 12px;" for="{{ $product->id }}"></label>
</div>
