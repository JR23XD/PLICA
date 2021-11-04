<?php
namespace App\Http\Repositories\Factura;

interface FacturaInterface {
  public function getFactura($id_factura);
  public function getPagination($request);
  public function store($request);
  public function update($request, $id_factura);
  public function delete($id_factura);
}