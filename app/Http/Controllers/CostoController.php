<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rango;
use App\Costo;

class CostoController extends Controller
{
    public function index(){
        return View('index');
    }

    public function getCostos($porcentaje, $rango){

    	$gasto_paneles = Rango::find($rango)->costos()
                        ->where('porcentaje', $porcentaje)
                        ->first();

        $gasto_actual  = Rango::find($rango)->costos()
                        ->where('porcentaje', 0)
                        ->first();

        $data = [];
        foreach ($gasto_actual->toArray() as $key => $value) {
            $data[$key] = [$gasto_actual[$key], $gasto_paneles[$key]];
        }
        
        return json_encode($data);
    }
}
