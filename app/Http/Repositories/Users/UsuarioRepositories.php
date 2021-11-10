<?php
namespace App\Http\Repositories\Users;
// Models
use App\Models\User;
// Otros
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
class UsuarioRepositories implements UsuarioInterface {
    public function getUsuario($id_usuario) {
      return User::where('id', '!=', Auth::user()->id)->findOrFail($id_usuario);
    }
  public function getPagination($request) {
//  DB::raw("select * from "
    $data = User::select('users.*', 'roles.nom as nom_role')
                ->buscar($request->buscador)
                ->where('users.id', '!=', Auth::user()->id)
                ->orderBy('id', 'DESC')
                ->leftjoin('user_role', 'users.id', 'user_role.user_id')
                ->leftjoin('roles', 'user_role.role_id', '=', 'roles.id')
                ->paginate($request->paginador);
                
//                 $ss = User::with(['roles'=> function($query) {
// $query->where('users.id');
//                 }])->get();

//                 dd($ss);

        return $data;

        

        /*
    return User::buscar($request->buscador)
    ->where('id', '!=', Auth::user()->id)
    ->orderBy('id', 'DESC')
    ->paginate($request->paginador);

    */
  }
  public function store($request) {
    $usuario= new User;
    $usuario->name=$request->name;
    $usuario->apes=$request->apes;
    $usuario->call=$request->call;
    $usuario->email=$request->email;
    $usuario->password=bcrypt($request->password);
    $usuario->save();
    $usuario->roles()->sync($request->rol);
    $usuario->clases()->sync($request->clase);
    $usuario->modalidads()->sync($request->modalidad);
    return $usuario;
  }
  public function update($request, $id_usuario) {
    $usuario=$this->getUsuario($id_usuario);
  
    $usuario->name=$request->name;
    $usuario->apes=$request->apes;
    $usuario->save();
  }
  public function delete($id_usuario) {  
    $usuario = $this->getUsuario($id_usuario);
    $usuario->delete();
  }
}

