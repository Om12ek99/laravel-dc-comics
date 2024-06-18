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
        top: -150%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: rgba(255, 255, 255, 0.2);
        border: 1px solid rgba(255, 255, 255, 0.15);
        box-shadow: inset 0px 0px 20px 5px rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        width: 100%;
        height: 100%;
        z-index: 1000;
        transition: top 0ms ease-in-out 0ms,
            opacity 300ms ease-in-out 0ms,
            transform 300ms ease-in-out 0ms;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .popup.active {
        top: 50%;
        transform: translate(-50%, -50%, scale(1));
        opacity: 1;
        transition: top 0ms ease-in-out 0ms,
            opacity 300ms ease-in-out 0ms,
            transform 300ms ease-in-out 0ms;
    }

    .popup-container {
        position: fixed;
        width: 600px;
        border: 1px solid rgba(255, 255, 255, 0.15);
        padding: 20px 30px;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.7);
    }

    .popup .close-btn {
        color: black;
        position: absolute;
        top: 10px;
        right: 10px;
        width: 25px;
        height: 25px;
        font-size: 18px;
        text-align: center;
        line-height: 23px;
        background: rgba(0, 0, 0, 0.2);
        border-radius: 50%;
        cursor: pointer;

    }

    .popup h2 {
        font-size: 35px;
        margin: 10px 0px 20px;
    }

    .popup p {
        font-size: 17px;
    }

    .comic-details {
        max-width: 80%;
        margin: 20px auto;
        padding: 20px;
        
        border-radius: 5px;
    }

    h1 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    p {
        margin-bottom: 8px;
    }
    
    .col:first-child{
        display: flex;
       
        align-items: center;

          img {
        max-width: 100%;
        
        height: 400px;
        border-radius: 4px;
        
    }

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

<div class="container">
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






            <!-- link per editare il fumetto -->
            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary custom_edit">Edit</a>

            <!-- form per aggiornare il fumetto -->

        </div>


        <a href="{{ route('comics.index') }}">Back to list</a>
    </div>
</div>


<div class="popup">
    <div class="popup-container">
        <div class="close-btn">
            &times;
        </div>
        <div class="row">
            <div class="col">
            <img src="/images/danger.png" alt="Logo" style="height: 250px;">
            </div>
            <div class="col">
                <h2>Sei sicuro di voler eliminare il fumetto corrente?</h2>
                <p>l'azione non sarà piu reversibile</p>
            </div>
        </div>

        <!-- elimina la voce dal database -->
        <form id="delete-form" action="{{ route('comics.destroy', $comic->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>

</div>





@endsection