@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="my-4">Cestino</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Titolo</th>
                <th>Data Elimininazione</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($deletedcomics as $deletedComic)
            <tr>
                <td>{{ $deletedComic->title }}</td>
                <td>{{ $deletedComic->deleted_at }}</td>
                <td>
                    <form action="{{ route('comics.restore', $deletedComic->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn btn-success">Restore</button>
                    </form>
                    <form action="{{ route('comics.forceDelete', $deletedComic->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


@endsection