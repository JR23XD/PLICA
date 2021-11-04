<?php
namespace App\Http\Repositories\Users;
// Models
use App\Models\User;
// Otros
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
class ProfesorRepositories implements ProfesorInterface {
    public function getUsuario($id_usuario) {
      return User::where('id', '!=', Auth::user()->id)->findOrFail($id_usuario);
    }
  public function getPagination($request) {
    return User::buscar($request->buscador)
    ->where('id', '!=', Auth::user()->id)
    ->orderBy('id', 'DESC', 'rol')
    ->paginate($request->paginador);
  }
  public function store($request) {
    $profesor= new User;
    $profesor->name=$request->name;
    $profesor->apes=$request->apes;
    $profesor->call=$request->call;
    $profesor->num_int=$request->num_int;
    $profesor->num_ext=$request->call;
    $profesor->col=$request->col;
    $profesor->cp=$request->cp;
    $profesor->mun=$request->mun;
    $profesor->est=$request->est;
    $profesor->email=$request->email;
    $profesor->telf=$request->telf;
    $profesor->telm=$request->telm;
    $profesor->obs=$request->obs;
    $profesor->save();
    $profesor->roles()->sync(2);
    return $profesor;
  }
  public function update($request, $id_usuario) {
    $profesor=$this->getUsuario($id_usuario);
  
    $profesor->name=$request->name;
    $profesor->apes=$request->apes;
    $profesor->save();
    $profesor->roles()->sync($request->rol);
  }
  public function delete($id_usuario) {  
    $profesor = $this->getUsuario($id_usuario);
    $profesor->delete();
  }
}

