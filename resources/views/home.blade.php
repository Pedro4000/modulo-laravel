@php
    use App\Services\CompteurService;
@endphp

@extends('layout.layout')

@section('titre')
home
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
            @if (Session::has('user'))
              <table class="table mt-4">
                  <thead>
                    <tr>
                      <th scope="col">Titre</th>
                      <th scope="col">Description</th>
                      <th scope="col">Crée par</th>
                      <th scope="col">Crée le</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($topics as $topic)
                  <tr>
                    <td><a href="{{ route('topic.read', [ 'topicId' => $topic->id ]) }}">{{ $topic->title }}</td></a>
                    <td scope="row">{{ Str::limit($topic->description,60) }}</td>
                    <td>{{ $topic->user->nickname }}</td>
                    <td>{{ $topic->created_at->format('d-m-Y') }}</td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              @endif
        </div>

</div>

@endsection

@push('scripts')
<script>
$(document).ready(function() {

});

</script>
@endpush
