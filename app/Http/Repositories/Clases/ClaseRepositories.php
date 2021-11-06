<?php
namespace App\Http\Repositories\Clases;
// Models
use App\Models\Clase;
class ClaseRepositories implements ClaseInterface {
    public function getClase($id_clase) {
        return Clase::findOrFail($id_clase);
    }
  public function getPagination($request) {
    return Clase::buscar($request->buscador)
    ->orderBy('id', 'DESC')
    ->paginate($request->paginador);
  }
  public function store($request) {
    $clase= new Clase;
    $clase->nom=$request->nom;
    $clase->save();
    $clase->users()->sync($request->user);
    
    return $clase;
  }
  public function update($request, $id_clase) {
  $clase = $this->getClase($id_clase);
  $clase->save();
  $clase->users()->sync($request->user);
  $clase->horarios()->sync($request->horario);

  }
  public function delete($id_clase) {
    
    $clase = $this->getClase($id_clase);
    $clase->delete();
    }
}
