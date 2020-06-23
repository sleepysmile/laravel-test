@extends('layouts.app')

@section('content')

    <form method="POST" action="{{route('publication.store')}}">
        <div class="form-group">
            <label for="exampleInputEmail1">Title publication</label>
            <input name="title" type="text" class="form-control" placeholder="Enter title">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Text publication</label>
            <textarea class="form-control" name="text" cols="30" rows="10" placeholder="Enter text">
            </textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
