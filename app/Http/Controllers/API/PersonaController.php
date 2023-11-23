<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    //

    public function get()
    {
        try {

            $data = Persona::get();
            return response()->json($data, 200);
        } catch (\Throwable $th) {

            return response()->json(['error' => $th->getMessage()], 500);
        }
    }

    public function create(Request $request){

        try{
            $data['nombre']=$request['nombre'];
            $data['direccion']=$request['direccion'];
            $data['telefono']=$request['telefono'];
            $res=Persona::create($data);
            return response()->json($res,200);

        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()],500) ;
    }

    }



}
