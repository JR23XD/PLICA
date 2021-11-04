<?php
namespace App\Http\Repositories\Clases;

interface ClaseInterface {
  public function getClase($id_clase);
  public function getPagination($request);
  public function store($request);
  public function update($request, $id_clase);
  public function delete($id_clase);
}