@extends('template.main')

@section('content')

<h1>Articles :</h1>


<div class="container">

    @foreach ($articles as $article)

        <div class="jumbotron">
            <h1 class="display-4">{{$article->title}}</h1>
            <p class="lead">{{$article->id}}</p>
            <hr class="my-4">
            <p>{{$article->text}}</p>
            <a class="btn btn-primary btn-lg" href="/articles/{{$article->id}}/edit" role="button">Edit</a>

            <form action="/articles/{{$article->id}}" method="POST">
                @csrf
                @method('DELETE')

                <button class="btn btn-danger  btn-lg mt-2">Delete</button>
            
            </form>

        </div>
        
    @endforeach


</div>




@endsection