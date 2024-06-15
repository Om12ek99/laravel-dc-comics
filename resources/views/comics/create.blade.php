@extends('layouts.app')

@section('content')
<h1>Add New Comic</h1>
<form action="{{ route('comics.store') }}" method="POST">
    @csrf
    <div>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title">
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>
    </div>
    <div>
        <label for="thumb">Thumbnail URL:</label>
        <input type="text" id="thumb" name="thumb">
    </div>
    <div>
        <label for="price">Price:</label>
        <input type="text" id="price" name="price">
    </div>
    <div>
        <label for="series">Series:</label>
        <input type="text" id="series" name="series">
    </div>
    <div>
        <label for="sale_date">Sale Date:</label>
        <input type="date" id="sale_date" name="sale_date">
    </div>
    <div>
        <label for="type">Type:</label>
        <input type="text" id="type" name="type">
    </div>
    <button type="submit">Add Comic</button>
</form>
@endsection