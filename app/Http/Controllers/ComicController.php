<?php

// app/Http/Controllers/ComicController.php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    // Show the form for creating a new resource.
    public function create()
    {
        return view('comics.create');
    }

    // Store a newly created resource in storage.
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'thumb' => 'required|string',
            'price' => 'required|numeric',
            'series' => 'required|string|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|string|max:255',
        ]);

        Comic::create($validatedData);
        return redirect()->route('comics.index');
    }

    // Display the specified resource.
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    // Show the form for editing the specified resource.
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    // Update the specified resource in storage.
    public function update(Request $request, Comic $comic)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'thumb' => 'required|string',
            'price' => 'required|numeric',
            'series' => 'required|string|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|string|max:255',
        ]);

        $comic->update($validatedData);
        return redirect()->route('comics.index');
    }

    // Remove the specified resource from storage.
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
