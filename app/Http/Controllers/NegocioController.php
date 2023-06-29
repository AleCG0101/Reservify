<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class NegocioController extends Controller
{
    
    //METODOS PERZONALIZADOS
    public function homeindex(){

        $response = Http::get('http://127.0.0.1:8000/api/negocios');
        $data = $response->json();

        for($i=0;$i<count($data);$i++){
            $categoria = Http::get('http://127.0.0.1:8000/api/categorias/'.$data[$i]['id_categoria']);
            $data[$i]['id_categoria'] = $categoria['descripcion'];
        }
        return view('home', compact('data'));
    }

 

    //METODOS PARA UN CRUD NORMAL
    public function index(){
        $response = Http::get('http://127.0.0.1:8000/api/negocios');
        $data = $response->json();
        return view('negocios_index', compact('data'));
    }

    public function create(){
        return view('negocios_create');
    }

    public function store(Request $request){

        $imagen = $request->file('imagen')->store('public/imagenes');
        $url = Storage::url($imagen);

        $response = Http::post('http://127.0.0.1:8000/api/negocios',[
            'imagen' => $url,
            'id_categoria' => $request->id_categoria,
            'nombre' => $request->nombre,
            'direccion' => $request->direccion,
            'horaapertura' => $request->horaapertura,
            'horacierre' => $request->horacierre,
            'descripcion' => $request->descripcion,
        ]);
        return redirect()->route('negocios.index')->with("success", "¡Negocio creado con éxito!");
    }

    public function show($idNegocio){
        $response = Http::get('http://127.0.0.1:8000/api/negocios/'.$idNegocio);
        $data = $response->json();

        $id_categoria = $data['id_categoria'];
   
        $categorias = Http::get('http://127.0.0.1:8000/api/categorias/'.$id_categoria);
        $categoria = $categorias->json();
        

        return view('negocios.negocio_detalle', compact('data'),compact('categoria'));
    }


    public function update(Request $request){
        $response = Http::put('http://127.0.0.1:8000/api/negocios/'.$request->id, [
            'id_categoria' => $request->id_categoria,
            'nombre' => $request->nombre,
            'direccion' => $request->direccion,
            'horaapertura' => $request->horaapertura,
            'horacierre' => $request->horacierre,
            'descripcion' => $request->descripcion,
        ]);
        return redirect()->route('negocios.index')->with("successEdit", "¡Negocio editado con éxito!");
    }

    public function destroy($idNegocio){
        $response = Http::delete('http://127.0.0.1:8000/api/negocios/'.$idNegocio);
        return redirect()->route('negocios.index')->with("successDelete", "¡Negocio eliminado con éxito!");
    }
}
