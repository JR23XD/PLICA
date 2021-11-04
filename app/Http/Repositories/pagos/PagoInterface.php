<?php
namespace App\Http\Repositories\Pagos;

interface PagoInterface {
  public function getPago($id_pago);
  public function getPagination($request);
  public function store($request);
  public function update($request, $id_pago);
  public function delete($id_pago);
}