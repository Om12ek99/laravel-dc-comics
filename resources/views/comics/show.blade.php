@extends('layouts.app')

@section('content')
<style>
    body:before,
    body:after {
        content: "";
        position: fixed;
        top: 0;
        left: 0;

    }

    .popup {
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: rgba(255, 255, 255, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.15);
        box-shadow: inset 0px 0px 20px 5px rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        width: 450px;
        padding: 20px 30px;
        border-radius: 10px;
        z-index: 1000;
    }

    .popup .close-btn{
        color: black;
        position: absolute;
        top: 10px;
        right: 10px;
        width: 25px;
        height: 25px;
        font-size: 18px;
        text-align: center;
        line-height: 25px;
        background: rgba(255, 255, 255, 0.15);
        border-radius: 50%;
        cursor: pointer;

    }

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

    .actions {
        align-items: center;
        text-align: center;
        justify-content: left;
        gap: 10px;
        margin-top: 3rem;


    }

    .custom_edit {
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

        <button id="open-popup" class="btn btn-danger">Delete</button>




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
<div class="popup">
    <div class="close-btn">
        &times;
    </div>
    <h2>Sei sicuro di voler eliminare il fumetto corrente?</h2>
    <p>l'azione non è piu reversibile</p>
</div>

<script>
    document.querySelector("open-popup").addEventListener("click", function() {
        document.querySelector(".popup").classList.add("active");
    });
</script>



@endsection