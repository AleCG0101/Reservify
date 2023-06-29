<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UsuarioController extends Controller
{
    public function index(){
        $response = Http::get('http://apirest_reservify.test/api/usuarios');
        $data = $response->json();
        return view('usuarios_index', compact('data'));
    }

    public function create(){
        return view('usuarios_create');
    }

    public function store(Request $request){
        $response = Http::post('http://apirest_reservify.test/api/usuarios',[
            'es_propietario' => $request->es_propietario,
            'id_negocio' => $request->id_negocio,
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'correo' => $request->correo,
            'direccion' => $request->direccion,
            'contrasena' => $request->contrasena,
            'fechanacimiento' => $request->fechanacimiento
        ]);
        return redirect()->route('usuarios.index')->with("success", "¡Usuario creado con éxito!");
    }

    public function show($idUsuario){
        $response = Http::get('http://apirest_reservify.test/api/usuarios/'.$idUsuario);
        $data = $response->json();
        return view('usuarios_show', compact('data'));
    }

    public function update(Request $request){
        $response = Http::put('http://apirest_reservify.test/api/usuarios/'.$request->id, [
            'es_propietario' => $request->es_propietario,
            'id_negocio' => $request->id_negocio,
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'correo' => $request->correo,
            'direccion' => $request->direccion,
            'contrasena' => $request->contrasena,
            'fechanacimiento' => $request->fechanacimiento
        ]);
        return redirect()->route('usuarios.index')->with("successEdit", "¡Usuario editado con éxito!");
    }

    public function destroy($idUsuario){
        $response = Http::delete('http://apirest_reservify.test/api/usuarios/'.$idUsuario);
        return redirect()->route('usuarios.index')->with("successDelete", "¡Usuario eliminado con éxito!");
    }
}
