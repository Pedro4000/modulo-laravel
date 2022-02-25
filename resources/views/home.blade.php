@php
    use App\Services\CompteurService;
@endphp

@extends('layout.layout')

@section('titre')
poser une éclipse
@endsection

@section('sidebar')

@endsection

@section('headcontent')

@endsection


@section('content')

<div class="main align-items-center min-vh-100">
        <div class="main align-items-center min-vh-100">
            <div class="w-75 m-auto d-flex align-items-center justify-content-center flex-column border mt-5 p-2">
                <h5>Test Modulo</h5>
                <p class="text-center">On va dans ce test créer une sorte de blog assez simple avec utilisateurs, topics et messages</p>
                <p>On peut naviguer grâce à la navbar</p>
            </div>
        </div>
</div>

@endsection

@push('scripts')
<script>
$(document).ready(function() {

});

</script>
@endpush
