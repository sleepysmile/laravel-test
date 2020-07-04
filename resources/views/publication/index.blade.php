@extends('layouts.app')

@section('content')

    <a href="{{route('frontend.publication.create')}}" class="btn btn-primary">create publication</a>
    <div class="row">
        @foreach ($publications as $publication)
            <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ $publication->imageUrl }}" alt="Card image cap">
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
