@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Te voici dans ton back office</h1>

    <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="/articles">Afficher les articles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/articles/create">Ajouter un article</a>
        </li>

    </ul>

</div>

@endsection