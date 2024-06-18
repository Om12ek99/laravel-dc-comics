@extends('layouts.app')
@section('content')
<div class="container">
        <h1 class="my-4">Cestino</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Titolo</th>
                    <th>Data Elimininazione</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deletedcomics as $deletedComic)
                    <tr>
                        <td>{{ $deletedComic->title }}</td>
                        <td>{{ $deletedComic->deleted_at }}</td>                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection