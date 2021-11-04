<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;


class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;

    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $guarded = [];
    protected $dates = ['deleted_at'];
  
    protected $fillable = [
        'name',
        'apes',
        'email',
        'password',
    ];
public function scopeBuscar($query, $buscador){
    if($buscador != null){
            return $query->where(function ($query) use ($buscador) {
              $query->where('users.id', 'like', '%'.$buscador.'%')
                    ->orWhere('users.name', 'like', '%'.$buscador.'%')
                    ->orWhere('users.apes', 'like', '%'.$buscador.'%')
                    ->orWhere('users.email', 'like', '%'.$buscador.'%')
                    ->orWhere('roles.nom', 'like', '%'.$buscador.'%');
                 
            });
          }
    }

    public function adminlte_profile_url()
    {
        return 'user/profile';
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    public function adminlte_image(){
          return 'https://picsum.photos/300/300';
    }
    public function adminlte_desc(){
        return'Administrador';
    }

    
    public function clases() {
        return $this->belongsToMany('App\Models\Clase', 'user_clase');
      }
      public function pagos() {
        return $this->belongsToMany('App\Models\Pagos', 'user_pago');
      }
      public function facturas() {
        return $this->belongsToMany('App\Models\Facturas', 'user_factura');
      }
      public function roles() {
        return $this->belongsToMany('App\Models\Role', 'user_role');
      }
      public function permissions() {
        return $this->belongsToMany('App\Models\Permision', 'user_permision');
      }
      public function modalidads() {
        return $this->belongsToMany('App\Models\Modalidad', 'user_modalidad');
      }
      public function users_clases() {
        return $this->belongsToMany('App\Models\User_Clase', 'modalidad_clase');
      } 
}
