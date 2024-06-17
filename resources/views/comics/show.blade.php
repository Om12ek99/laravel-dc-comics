@extends('layouts.app')

@section('content')
<style>
    .comic-details {
        max-width: 80%;
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    h1 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    p {
        margin-bottom: 8px;
    }

    img {
        max-width: 100%;
        height: auto;
        border-radius: 4px;
        margin-bottom: 10px;
    }

    a {
        display: inline-block;
        margin-top: 15px;
        color: #007bff;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }
    .actions{
        align-items: center;
        text-align: center;
        justify-content: left;
        gap: 10px;
        margin-top: 3rem;


    }
    .custom_edit{
        margin-top: 0;
        justify-content: center;
        }
</style>

<div class="comic-details">
    <div class="row">
        <div class="col">
            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </div>
        <div class="col">
            <h1>{{ $comic->title }}</h1>
            <p>{{ $comic->description }}</p>
            <p>Price: ${{ $comic->price }}</p>
            <p>Series: {{ $comic->series }}</p>
            <p>Sale Date: {{ $comic->sale_date }}</p>
            <p>Type: {{ $comic->type }}</p>
        </div>
    </div>

    <div class="actions d-flex">
        <!-- elimina la voce dal database -->
        <form id="delete-form" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>

        <!-- link per editare il fumetto -->
        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary custom_edit">Edit</a>

        <!-- form per aggiornare il fumetto -->

    </div>


    <a href="{{ route('comics.index') }}">Back to list</a>
</div>
@endsection