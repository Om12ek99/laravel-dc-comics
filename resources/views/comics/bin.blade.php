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
                        <button type="submit" class="btn btn-success">Ripristina</button>
                    </form>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $deletedComic->id }}">
                        Elimina
                    </button>

                    <div class="modal fade" id="deleteModal{{ $deletedComic->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $deletedComic->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel{{ $deletedComic->id }}">Confirm Delete</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Sei Sicuro di voler eliminare definitivamente:  "{{ $deletedComic->title }}"?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Ritorna al Cestino</button>
                                    <form action="{{ route('comics.forceDelete', $deletedComic->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">SI sono sicuro</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                </td>
            </tr>





            @endforeach
        </tbody>
    </table>
</div>


@endsection