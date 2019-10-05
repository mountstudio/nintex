@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="my-content">

                </div>
            </div>
        </div>
    </div>
@endsection

@push("scripts")
<script>
    document.addEventListener(
        "DOMContentLoaded", () => {
            new Mmenu( "#my-menu", {
                wrappers: ["bootstrap"]
            });
        }
    );
</script>
@endpush
