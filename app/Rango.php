<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Rango;

class Rango extends Model
{
    protected $table = 'rangos';
    protected $hidden = ['created_at', 'updated_at'];
    public function costos(){
    	return $this->hasMany('App\Costo');
    }
}
