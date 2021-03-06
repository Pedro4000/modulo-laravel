@php
    use App\Services\CompteurService;
@endphp

@extends('layout.layout')

@section('titre')
message
@endsection

@section('sidebar')

@endsection

@section('headcontent')

@endsection


@section('content')

    <div class="main align-items-center min-vh-100">
        <form action="{{ route('message.update') }}" method="post">
            @csrf
            <div class="w-75 m-auto mt-4">
                <h6 class="py-2 px-4 border"> Sujet : {{ $message->topic->title }}</h6>
                <input class="d-none" name="messageId" value="{{ $message->id }}">
                <label for="content"></label>
                <textarea class="mt-2 w-100 form-control" name="content" id="content" rows="15" >{{ $message->content }}</textarea>
            <button type="submit" class="btn btn-primary mt-1">Enregister</button>
            </div>
        </form>
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
