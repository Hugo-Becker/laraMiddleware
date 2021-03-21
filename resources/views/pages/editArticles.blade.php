@extends('template.main')


@section('content')

    <div class="container">
        <form action="/articles/{{$article->id}}" method="POST">
        @csrf
        @method('PATCH')

        <div class="form-group"></div>
            <label for="">Title</label>
            <input value="{{$article->title}}" class="form-control" type="text" name="title">

        </div>    
       

        <div class="form-group"></div>
            <label for="">Text</label>
            <input value="{{$article->text}}" class="form-control" type="text" name="text">

        </div>    

        <button type="submit"> Update </button>
        </form>
    </div>
    
@endsection