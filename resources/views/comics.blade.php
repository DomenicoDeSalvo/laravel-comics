@extends('layouts.app')

@section('title','Comics')

@section('content')
    <div class="container">
        <h1>COMICS</h1>        
    </div>
    <div class="container">
        <div class="row row-cols-6">
            @foreach ($comics as $comic)
                <div class="col my-4 d-flex align-items-stretch">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{$comic['title'];}}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection