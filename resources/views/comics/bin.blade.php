@extends('layouts.app')
@section('content')
<ul>
    @foreach ($deletedcomics as $deletedComic)
        <li>{{ $deletedComic->title }}</li>
    @endforeach
</ul>
@endsection