@php
    use App\Services\CompteurService;
@endphp

@extends('layout.layout')

@section('titre')
modifier un message
@endsection

@section('sidebar')

@endsection

@section('headcontent')

@endsection


@section('content')

    <div class="main align-items-center min-vh-100">
        <div class="w-75 m-auto">
            <form class="needs-validation p-3 mt-5 border" novalidate method="POST" action="{{ route('message.store') }}">
            @csrf

                <div class="form-row">
                    <div class="col-md-13 mb-3">
                        <input type="" class="d-none" value="{{ $message->id }}">
                        <label for="validationCustom03">Sujet</label>
                        <select name="topic" id="topic" class="form-select" readonly>
                        <option value="{{ $topic->id }}">{{ $topic->description }}</option>
                        </select>
                        <div class="invalid-feedback">
                            Sujet
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="w-100 mb-3">
                        <label for="validationCustom04">Contenu</label>
                        <textarea type="content" class="form-control" id="validationCustom04" required name="content" col="10"></textarea>
                        <div class="invalid-feedback">
                            {{ $message->contenu }}
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
