@php
    use App\Services\CompteurService;
@endphp

@extends('layout.layout')

@section('titre')
register
@endsection

@section('sidebar')

@endsection

@section('headcontent')

@endsection


@section('content')

    <div class="main align-items-center min-vh-100">
        <div class="w-75 m-auto">
            <form class="needs-validation p-3 mt-5 border" novalidate method="POST" action="{{ route('register.store') }}">
            @csrf
                <div class="form-row">

                    <div class="col-md-4 mb-3">
                        <label for="validationCustom01">Prénom</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="Prénom" value="" name="firstName" required>
                        <div class="valid-feedback">
                            ok
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="validationCustom02">Nom</label>
                        <input type="text" class="form-control" id="validationCustom02" placeholder="Nom" value="" name="lastName" required>
                        <div class="valid-feedback">
                            ok
                        </div>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="validationCustomUsername">Peudo</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                            </div>
                            <input type="text" class="form-control" id="validationCustomUsername" placeholder="Pseudo" aria-describedby="inputGroupPrepend" required name="nickName">
                            <div class="invalid-feedback">
                            Choisissez un pseudo correct
                            </div>
                        </div>
                    </div>

                </div>

                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationCustom03">Email</label>
                        <input type="text" class="form-control" id="validationCustom03" placeholder="Email" required name="email">
                        <div class="invalid-feedback">
                            Email incorrecte
                        </div>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="validationCustom04">Mot de passe</label>
                        <input type="password" class="form-control" id="validationCustom04" required name="password">
                        <div class="invalid-feedback">
                            Mdp incorrect
                        </div>
                    </div>

                </div>
                <div class="form-group">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Termes et conditions
                    </label>
                    <div class="invalid-feedback">
                        Vous devez valider.
                    </div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Envoyer</button>
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
