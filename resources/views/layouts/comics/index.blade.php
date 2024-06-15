@extends('layouts.app')

@section('content')
<h1>Comics List</h1>
<a href="{{ route('comics.create') }}">Add New Comic</a>
<ul>
    @foreach ($comics as $comic)
        <li>
            <a href="{{ route('comics.show', $comic->id) }}">{{ $comic->title }}</a>
        </li>
    @endforeach
</ul>
@endsection