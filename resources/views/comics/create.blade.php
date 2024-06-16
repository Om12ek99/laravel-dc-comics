@extends('layouts.app')

@section('content')
    <style>
            body {
        background-image: url('/images/form.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        h1 {
            text-align: center;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        input[type="text"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }

        textarea {
            height: 100px; 
        }

        button[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>

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