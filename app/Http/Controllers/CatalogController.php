<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use Alert;


class CatalogController extends Controller
{
    public function getIndex(Request $request)
    {
        if ($request->has('filter')) {
            switch ($request->filter) {
                case 'rented':
                    $movies = Movie::where('rented', true)->get();
                    break;
                case 'available':
                    $movies = Movie::where('rented', false)->get();
                    break;
                default:
                    $movies = Movie::all();
                    break;
            }
        } else {
            $movies = Movie::all();
        }
    
        if ($request->ajax()) {
            return view('partials.movies', compact('movies'))->render();
        }
    
        return view('catalog.index', compact('movies'));
    }

    public function getShow($id)
    {
        $movie = Movie::findOrFail($id);
    	return view('catalog.show', compact('movie'));
    }

    public function getCreate()
    {
        return view('catalog.create');
    }

    public function getEdit($id)
    {
        $movie = Movie::findOrFail($id);
    	return view('catalog.edit', compact('movie'));
    }

    public function postCreate(Request $request)
    {
        $movie = new Movie;
        $movie->title = $request->input('title');
        $movie->year = $request->input('year');
        $movie->director = $request->input('director');
        $movie->poster = $request->input('poster');
        $movie->synopsis = $request->input('synopsis');
        $movie->rented = false;
        $movie->save();

        Alert::success('La película se ha guardado correctamente');
        
        return redirect()->route('catalog.index');
    }

    public function putEdit(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->title = $request->input('title');
        $movie->year = $request->input('year');
        $movie->director = $request->input('director');
        $movie->poster = $request->input('poster');
        $movie->synopsis = $request->input('synopsis');
        $movie->save();

        Alert::success('La película se ha modificado correctamente');

        return redirect()->route('catalog.show', $movie->id);
    }

    public function putRent($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->rented = true;
        $movie->save();

        Alert::success('Película alquilada correctamente');

        return redirect()->route('catalog.show', $movie->id);
    }

    public function putReturn($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->rented = false;
        $movie->save();

        Alert::success('Película devuelta correctamente');

        return redirect()->route('catalog.show', $movie->id);
    }

    public function deleteMovie($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();

        Alert::success('Película eliminada correctamente');

        return redirect()->route('catalog.index');
    }
}
