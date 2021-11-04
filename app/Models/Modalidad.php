<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modalidad extends Model
{
    use HasFactory;
    protected $table = 'modalidads';
    protected $primaryKey = 'id';
    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function users() {
        return $this->belongsToMany('App\Models\User', 'user_modalidad');
      }
      public function clases() {
        return $this->belongsToMany('App\Models\Clase', 'modalidad_clase');
      }
}
