<?php
namespace App\Http\Repositories\Clases;

interface HorarioInterface {
  public function getHorario($id_horario);
  public function getPagination($request);
  public function store($request, $id_clase);
  public function update($request, $id_horario);
  public function delete($id_horario);
}