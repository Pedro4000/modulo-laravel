@php
    use App\Services\CompteurService;
@endphp

@extends('layout.layout')

@section('titre')
login
@endsection

@section('sidebar')

@endsection

@section('headcontent')

@endsection


@section('content')

    <div class="main align-items-center min-vh-100">

        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
            @if (Session::has($msg)) 
            
                <div class="alert alert-{{ $msg }}" role="alert">
                    {{ Session::get($msg) }} <a href="#!" class="close" data-dismiss="alert" aria-label="close"><i class="fas fa-times"></i></a>
                </div>
            @endif
        @endforeach
            
        <h2></h2>
        <div class="w-25 m-auto">
            <form class="needs-validation p-3 mt-5 border" novalidate method="POST" action="{{ route('login.attempt') }}">
            @csrf
                <div class="form-row">
                    <div class="w-100 mb-3">
                        <label for="validationCustom03">Email</label>
                        <input type="text" class="form-control" id="validationCustom03" placeholder="Email" required name="email">
                        <div class="invalid-feedback">
                            Email incorrecte
                        </div>
                    </div>

                </div>
                <div class="form-row">

                    <div class="w-100 mb-3">
                        <label for="validationCustom04">Mot de passe</label>
                        <input type="password" class="form-control" id="validationCustom04" required name="password">
                        <div class="invalid-feedback">
                            Mdp incorrect
                        </div>
                    </div>
                </div>
                
                <button class="btn btn-primary" type="submit">Se connecter</button>
            </form>
        </div>
    </div>

    
@endsection
    
@push('scripts')
<script>
    $(document).ready(function() {
        
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
                }, false);
            });
            }, false);
        })();
    });

</script>
@endpush
