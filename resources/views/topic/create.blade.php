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
        <div class="w-75 m-auto">
            <form class="needs-validation p-3 mt-5 border" novalidate method="POST" action="{{ route('topic.store') }}">
            @csrf


                <div class="form-row">
                    <div class="mb-3 w-100">
                        <label for="title">Titre</label>
                        <input type="text" name="title" id="title" class="form-control ">                       
                        <div class="invalid-feedback">
                            Titre
                        </div>
                    </div>

                </div>
                <div class="form-row">

                    <div class="w-100 mb-3">
                        <label for="descrition">Description</label>
                        <textarea class="form-control" id="description" required name="description" rows="15"></textarea>
                        <div class="invalid-feedback">
                            Description
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
