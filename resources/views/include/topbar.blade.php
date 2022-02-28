<a class="navbar-brand" href="{{ route('home') }}">Modulo</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(#)</span></a>
        </li>
        @if (!Session::has('user'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">Register</a>
            </li>
        @endif
        @if (Session::has('user'))
            <li class="nav-item ml-1">
                <a class="nav-link" href="{{ route('message.create') }}">ajouter un message</a>
            </li>
            <li class="nav-item ml-1">
                <a class="nav-link" href="{{ route('topic.create') }}">ajouter un sujet</a>
            </li>
            <li class="nav-item ml-1">
                <a class="nav-link" href="{{ route('logout') }}">logout</a>
            </li>
        @endif
    </ul>
</div>