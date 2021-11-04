<?php
namespace App\Http\Repositories\Users;
// Models
use App\Models\User;
// Otros
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
class AlumnoRepositories implements AlumnoInterface {
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
    $alumno= new User;
    $alumno->name=$request->name;
    $alumno->apes=$request->apes;
    $alumno->call=$request->call;
    $alumno->num_int=$request->num_int;
    $alumno->num_ext=$request->call;
    $alumno->col=$request->col;
    $alumno->cp=$request->cp;
    $alumno->mun=$request->mun;
    $alumno->est=$request->est;
    $alumno->email=$request->email;
    $alumno->telf=$request->telf;
    $alumno->telm=$request->telm;
    $alumno->obs=$request->obs;
    $alumno->save();
    $alumno->roles()->sync(3);
    
    return $alumno;
    $caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!#%&()_-+=[}]<>/';
      $nueva_password = '';
      for ($i = 0; $i <config('app.longitud_del_password') ; $i++) { // Variable "longitud_del_password" definida en el archivo .env
        $nueva_password .= $caracteres[rand(0, strlen($caracteres) - 1)];
      }
  }
  public function update($request, $id_usuario) {
    $alumno=$this->getUsuario($id_usuario);
  
    $alumno->name=$request->name;
    $alumno->apes=$request->apes;
    $alumno->save();
    
  }
  public function delete($id_usuario) {  
    $alumno = $this->getUsuario($id_usuario);
    $alumno->delete();
  }
}

