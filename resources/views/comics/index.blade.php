@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mt-5 mb-4">Comics List</h1>
        <a href="{{ route('comics.create') }}" class="btn btn-primary mb-4">Add New Comic</a>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($comics as $comic)
                <div class="col">
                    <div class="card h-100">
                        <a href="{{ route('comics.show', $comic->id) }}">
                            <img src="{{ $comic->thumb }}" class="card-img-top img-fluid" alt="{{ $comic->title }}">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <style>
        .card-img-top {
            height: 300px; 
            object-fit: cover; 
        }
        
    </style
@endsection

