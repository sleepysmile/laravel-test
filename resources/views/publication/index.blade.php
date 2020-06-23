@extends('layouts.app')

@section('content')

    <div class="row">
        @foreach ($publications as $publication)
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">{{$publication->title}}</h5>
                    <p class="card-text">{{$publication->text}}</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
