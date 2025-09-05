<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index() { return Categoria::all(); }

    public function store(Request $request){
        $request->validate(['nome' => 'required|string|max:255']);
        return Categoria::create($request->all());
    }

    public function show($id){ return Categoria::findOrFail($id); }

    public function update(Request $request, $id){
        $categoria = Categoria::findOrFail($id);
        $request->validate(['nome' => 'sometimes|required|string|max:255']);
        $categoria->update($request->all());
        return $categoria;
    }

    public function destroy($id){
        Categoria::findOrFail($id)->delete();
        return response()->json(['message' => 'Categoria deletada']);
    }
}
