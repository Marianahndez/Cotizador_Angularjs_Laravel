<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Rango;
use App\Costo;
use Illuminate\Support\Facades\DB;

class Costo extends Model
{
    protected $table = 'costos';
      protected $hidden = ['created_at', 'updated_at', 'porcentaje', 'id', 'rango_id', 'paneles', 'rango_inversion'];
}
