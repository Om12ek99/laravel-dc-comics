<?php



namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    // index
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

//    create
    public function create()
    {
        return view('comics.create');
    }

    // store
    public function store(Request $request)
    {
        // validazione dei dati
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'thumb' => 'required|string',
            'price' => 'required|numeric',
            'series' => 'required|string|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|string|max:255',
        ]);

        //crea ununa nuova voce usando il metodo create
        Comic::create($validatedData);
        return redirect()->route('comics.index');
    }

    // show
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    // editing della voce corrente
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    // aggiorna
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

    // delete
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
