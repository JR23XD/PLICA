<?php
namespace App\Http\Repositories\Factura;
use App\Models\Facturas;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Http\Request;

class FacturaRepositories implements FacturaInterface{
    public function getFactura($id_factura){
        return Facturas::findOrFail($id_factura);
    
    }
    public function getPagination($request) {
        return Facturas::buscar($request->buscador)
        ->orderBy('id', 'DESC')
        ->paginate($request->paginador);
    }
    public function store($request) {
    $factura= new Facturas;
    $factura->fdf=$request->input('fdf');
    $factura->nrs=$request->input('nrs');
    $factura->telf=$request->input('telf');
    $factura->telc=$request->input('telc');
    $factura->cal=$request->input('cal');
    $factura->noi=$request->input('noi');
    $factura->noe=$request->input('noe');
    $factura->col=$request->input('col');
    $factura->cp=$request->input('cp');
    $factura->mun=$request->input('mun');
    $factura->esta=$request->input('esta');
    $factura->cfdi=$request->input('cfdi');
    $factura->conce=$request->input('conce');
    $factura->comen=$request->input('comen');
    $factura->save();
    return $factura;
    }
    public function update($request,$id_factura){
        $factura=$this->getFactura($id_factura);
        $factura->fdf=$request->input('fdf');
        $factura->nrs=$request->input('nrs');
        $factura->telf=$request->input('telf');
        $factura->telc=$request->input('telc');
        $factura->cal=$request->input('cal');
        $factura->noi=$request->input('noi');
        $factura->noe=$request->input('noe');
        $factura->col=$request->input('col');
        $factura->cp=$request->input('cp');
        $factura->mun=$request->input('mun');
        $factura->esta=$request->input('esta');
        $factura->cfdi=$request->input('cfdi');
        $factura->conce=$request->input('conce');
        $factura->comen=$request->input('comen');
        $factura->save(); 

    }
     public function delete($id_factura) {
          $factura = $this->getFactura($id_factura);
          $factura->delete();
        }  
}