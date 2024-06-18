@extends('layouts.app')

@section('content')
<style>
    .comic-edit {
        max-width: 600px;
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

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input, textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        background-color: #28a745;
        color: white;
        border: none;
        padding: 10px 15px;
        border-radius: 5px;
        cursor: pointer;
    }

    button:hover {
        background-color: #218838;
    }

    .back-link {
        display: inline-block;
        margin-top: 15px;
        color: #007bff;
        text-decoration: none;
    }

    .back-link:hover {
        text-decoration: underline;
    }
</style>

<div class="comic-edit">
    <h1>Edit Comic</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Title</label>
        <input type="text" id="title" name="title" value="{{ $comic->title }}" >

        <label for="description">Description</label>
        <textarea id="description" name="description">{{ $comic->description }}</textarea>

        <label for="thumb">Thumbnail URL</label>
        <input type="text" id="thumb" name="thumb" value="{{ $comic->thumb }}" >

        <label for="price">Price</label>
        <input type="text" id="price" name="price" value="{{ $comic->price }}" >

        <label for="series">Series</label>
        <input type="text" id="series" name="series" value="{{ $comic->series }}">

        <label for="sale_date">Sale Date</label>
        <input type="date" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">

        <label for="type">Type</label>
        <input type="text" id="type" name="type" value="{{ $comic->type }}" >

        <button type="submit">Update Comic</button>
    </form>

    <a href="{{ route('comics.index') }}" class="back-link">Back to list</a>
</div>
@endsection