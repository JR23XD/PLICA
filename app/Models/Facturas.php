<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facturas extends Model
{
    use HasFactory;
    protected $table = 'facturas';
    protected $primaryKey = 'id'; 
    protected $guarded = []; 
    protected $dates = ['deleted_at'];
  
    public function scopeBuscar($query, $buscador){
      if($buscador != null){
        return $query->where(function ($query) use ($buscador) {
          $query->where('id', 'like', '%'.$buscador.'%')
                ->orWhere('nrs', 'like', '%'.$buscador.'%');    
        });
      }
    }
    public function run()
  {
      User::factory()
              ->count(10)
              ->create();
  }
  public function users() {
    return $this->belongsToMany('App\Models\User', 'user_clase');
  }
  }
  
