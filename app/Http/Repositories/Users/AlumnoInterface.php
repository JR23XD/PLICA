<?php
namespace App\Http\Repositories\Users;

interface AlumnoInterface {
  public function getUsuario($id_usuario);
  public function getPagination($request);
  public function store($request);
  public function update($request, $id_usuario);
  public function delete($id_usuario);
}