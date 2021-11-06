<?php
namespace App\Http\Repositories\Clases;
// Models

use App\Models\Horario;
class HorarioRepositories implements HorarioInterface {
    public function getHorario($id_horario) {
        return Horario::findOrFail($id_horario);
    }
  public function getPagination($request) {
    return Horario::buscar($request->buscador)
    ->orderBy('id', 'DESC')
    ->paginate($request->paginador);
  }
  public function store($request, $id_clase) {
    $horario= new Horario;
    $horario->fhi=$request->fhi;
    $horario->fhf=$request->fhf;
    $horario->mod=$request->mod;
    $horario->tip=$request->tip;
    $horario->save();
    $horario->clases()->sync($id_clase);
    
    return $horario;
  }
  public function update($request, $id_horario) {
  $horario = $this->getHorario($id_horario);
  $horario->save();

  }
  public function delete($id_horario) {
    $horario = $this->getHorario($id_horario);
    $horario->delete();
    }
}
