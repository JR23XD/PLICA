<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Clase extends Model
{
    use HasFactory;
    protected $table = 'user_clase';
    protected $primaryKey = 'id';
    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function users_modalidads() {
        return $this->belongsToMany('App\Models\User_Modalidad', 'usmod_usclas');
      }
}
