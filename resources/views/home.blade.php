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
        color: #fff; 
    }

    h2 {
        color: #fff; 
    }

    a {
        color: #fff; 
        text-decoration: underline;
    }
</style>
    <h1>COMIC ARCHIVE</h1>
    <br>
    <h2>Il tuo archivio di fumetti preferito</h2>
    <a href="{{ route('comics.index') }}">Scopri il catalogo</a>
@endsection
