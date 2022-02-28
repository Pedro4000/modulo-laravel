@php
    use App\Services\CompteurService;
@endphp

@extends('layout.layout')

@section('titre')
Page sujet
@endsection

@section('sidebar')

@endsection

@section('headcontent')

@endsection


@section('content')

    <div class="main align-items-center min-vh-100">
        <div class="w-75 m-auto mt-4">
            <h6 class="py-2 px-4 border"> Sujet : {{ $topic->title }}</h6>
            <p class="mt-2">{{ $topic->description }}</p>
            @foreach( $topic->messages as $message)
                <div class="border mt-4 p-2">
                    <h6 class="p2">    
                        {{ $message->title }}
                    </h6>
                    <p> {{ $message->content }}</p>
                    <p>Message de : {{ $message->user->nickname }}</p>
                    <div class="d-flex justify-content-between">
                        <span>Crée le : {{ $message->created_at->format('d-m-Y') }}</span>
                        <span class="d-flex">
                            <a class="btn btn-outline-success" href="{{ route('message.read', [ 'messageId' => $message->id ]) }}">Modifier</a>
                            <form action="{{ route('message.delete') }}" method="post" class="ml-1">
                                @csrf
                                <input name="messageId" id="messageId" class="d-none" value="{{ $message->id }}">
                                <button class="btn btn-outline-danger"href="{{ route('message.delete', [ 'messageId' => $message->id ]) }}">Supprimer</a>
                            </form>
                        </span>
                    </div>
                </div>
            @endforeach
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
