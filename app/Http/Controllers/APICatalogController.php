<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class APICatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Movie::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Obtener los datos enviados en la petición y guardar la película
        $movie = Movie::create($request->all());
        return response()->json($movie, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json(Movie::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->update($request->all());
        return response()->json($movie, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Movie::destroy($id);
        return response()->json(null, 204);
    }
    
    public function putRent($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->rented = true;
        $movie->save();
        return response()->json(['error' => false, 'msg' => 'La película se ha marcado como alquilada']);
    }

    public function putReturn($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->rented = false;
        $movie->save();
        return response()->json(['error' => false, 'msg' => 'La película se ha marcado como devuelta']);
    }
}