<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CategoriaController extends Controller
{
    public function index(){
        $response = Http::get('http://127.0.0.1:8000/api/categorias');
        $data = $response->json();
        return view('categorias_index', compact('data'));
    }

    public function create(){
        return view('categorias_create');
    }

    public function store(Request $request){
        $response = Http::post('http://127.0.0.1:8000/api/categorias',[
            'descripcion' => $request->descripcion,
        ]);
        return redirect()->route('categorias.index')->with("success", "¡Categoría creada con éxito!");
    }

    public function show($idCategoria){
        $response = Http::get('http://127.0.0.1:8000/api/categorias/'.$idCategoria);
        $data = $response->json();
        return view('categorias_show', compact('data'));
    }

    public function update(Request $request){
        $response = Http::put('http://127.0.0.1:8000/api/categorias/'.$request->id, [
            'descripcion' => $request->descripcion,
        ]);
        return redirect()->route('categorias.index')->with("successEdit", "¡Categoría editada con éxito!");
    }

    public function destroy($idCategoria){
        $response = Http::delete('http://127.0.0.1:8000/api/categorias/'.$idCategoria);
        return redirect()->route('categorias.index')->with("successDelete", "¡Categoría eliminada con éxito!");
    }
}
