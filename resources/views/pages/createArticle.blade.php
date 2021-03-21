@extends('template.main')


@section('content')

    <div class="container">

        <form action="/articles" method="POST">
            @csrf


            <div class="form-group">
                <label for="">Title</label>
                <input class="form-control" name="title" type="text">
            </div>
            <div class="form-group">
                <label for="">Text</label>
                <input class="form-control" name="text" type="text">
            </div>

            <button class="btn btn-success" type="submit">Ajouter</button>
        </form>
    </div>
    
@endsection