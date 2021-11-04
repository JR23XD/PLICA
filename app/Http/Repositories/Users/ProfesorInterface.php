<?php
namespace App\Http\Repositories\Users;

interface ProfesorInterface {
  public function getUsuario($id_usuario);
  public function getPagination($request);
  public function store($request);
  public function update($request, $id_usuario);
  public function delete($id_usuario);
}