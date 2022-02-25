<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
<script src="https://kit.fontawesome.com/23527384bb.js" crossorigin="anonymous"></script>    
<link href="{{ asset('bootstrap/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/fonts.css') }}" rel="stylesheet">    
<link href="{{ asset('css/app.css') }}" rel="stylesheet">    
<link href="{{ asset('css/modal-front.css') }}" rel="stylesheet">    
<link rel="icon" href="{{ asset('storage/favicon/favicon3.ico')}}" />

@stack('css')

<title>@yield('titre') - {{ config('app.name', '') }}</title>

<style>

</style>