<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    use HasFactory;
    protected $table = 'clases';
    protected $primaryKey = 'id';
    protected $guarded = [];
    protected $dates = ['deleted_at'];

    
public function scopeBuscar($query, $buscador){
    if($buscador != null){
            return $query->where(function ($query) use ($buscador) {
                $query->where('id', 'like', '%'.$buscador.'%')
                    ->orWhere('mod', 'like', '%'.$buscador.'%');
                    
            });
            }
    }


   
    public function users() {
        return $this->belongsToMany('App\Models\User', 'user_clase');
      }
    public function modalidads() {
        return $this->belongsToMany('App\Models\Modalidad', 'modalidad_clase');
      }
      public function horarios() {
        return $this->belongsToMany('App\Models\Horario', 'clase_horario');
      }
   
}
