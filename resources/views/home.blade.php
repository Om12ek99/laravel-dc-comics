@extends('layouts.app')

@section('content')
<style>
    body {
        background-image: url('/images/background.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    h1 {
        font-size: 8rem;
        color: #fff; /* Colore del testo per migliorare la leggibilità sullo sfondo */
    }

    h2 {
        color: #fff; /* Colore del testo per migliorare la leggibilità sullo sfondo */
    }

    a {
        color: #fff; /* Colore del testo per migliorare la leggibilità sullo sfondo */
        text-decoration: underline;
    }
</style>
    <h1>COMIC ARCHIVE</h1>
    <h2>Il tuo archivio di fumetti preferito</h2>
    <a href="{{ route('comics.index') }}">Scopri il catalogo</a>
@endsection
