<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rango;
use App\Costo;

class CostoController extends Controller
{
    public function getCostos($porcentaje, $rango){

    	$gasto_paneles = Rango::find($rango)->costos()
                        ->where('porcentaje', $porcentaje)
                        ->first();

        $gasto_actual  = Rango::find($rango)->costos()
                        ->where('porcentaje', 0)
                        ->first();

        $data = [];
        $months = ["ene_feb" => "Enero - Febrero", 
                   "mar_abr" => "Marzo - Abril", 
                   "may_jun" => "Mayo - Junio", 
                   "jul_ago" => "Julio - Agosto", 
                   "sep_oct" => "Septiembre - Octubre", 
                   "nov_dic" => "Noviembre - Diciembre" ];

        foreach ($gasto_actual->toArray() as $key => $value) {
            if(!array_key_exists($key, $months)){
                $data[$key] = ["actual"  => $gasto_actual[$key], 
                               "paneles" => $gasto_paneles[$key]];
            }
            else{
                $data[$months[$key]] = ["actual"  => $gasto_actual[$key], 
                                        "paneles" => $gasto_paneles[$key]];
            }

        }
        
        return json_encode($data);
    }
}
