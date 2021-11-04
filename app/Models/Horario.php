<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    use HasFactory;
    protected $table = 'horarios';
    protected $primaryKey = 'id';
    protected $guarded = [];
    protected $dates = ['deleted_at'];



    public function clases() {
      return $this->belongsToMany('App\Models\Clase', 'clase_horario');
    }
    
}
