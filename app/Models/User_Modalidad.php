<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Modalidad extends Model
{
    use HasFactory;
    protected $table = 'user_modalidad';
    protected $primaryKey = 'id';
    protected $guarded = [];
    protected $dates = ['deleted_at'];

    public function users_clases() {
        return $this->belongsToMany('App\Models\User_Clase', 'usmod_usclas');
      }
}
