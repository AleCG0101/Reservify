<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CitaController extends Controller
{
    //Consumimos la API para traer los datos del negocio al que se le agenda la cita.
    public function crearCita($idNegocio){
        $response = Http::get('http://127.0.0.1:8000/api/negocios/'.$idNegocio);
        $data = $response->json();
        return view('citas.cita_negocio', compact('data'));
    }

    public function finalizarCita(Request $request){
        $response = Http::post('http://127.0.0.1:8002/api/cita',[
            'id_negocio' => $request->id_negocio,
            'id_usuario' => $request->id_usuario,
            'fecha' => $request->fecha,
            'hora' => $request->hora,
        ]);
        return redirect()->route('home.index')->with("success", "¡Cita agendada con éxito!");
    }

    public function citaUsuario($id){
        $cita = Http::get('http://127.0.0.1:8002/api/cita_usuario/'.$id);
        $data = $cita->json();
        $direcciones = null;
        for($i=0;$i<count($data);$i++){
            $negocio = Http::get('http://127.0.0.1:8000/api/negocios/'.$data[$i]['id_negocio']);
            $data[$i]['id_negocio'] = $negocio['nombre'];

            $direcciones[$i]['direccion']=$negocio['direccion'];
        }



        return view('citas.cita_detalle', compact('data'), compact('direcciones'));
    }

}
