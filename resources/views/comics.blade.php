@extends('layouts.app')

@section('title','Comics')

@section('content')
    <section class='comics'>
        <div class="container">
            <h1>COMICS</h1>        
        </div>
        <div class="container">
            <div class="row row-cols-6">
                @foreach ($comics as $comic)
                    <div class="col  my-4 d-flex align-items-stretch">
                        <div class="card flex-fill">
                            <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title text-center">{{$comic['title'];}}</h5>
                                <p class="card-text">{{$comic['series'];}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container">
        <button type="button" class="btn btn-primary">Load More</button>
        </div>
    </section>
@endsection