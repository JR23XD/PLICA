<?php
namespace App\Http\Repositories\Pagos;
use App\Models\Pagos;
use Illuminate\Support\Facades\Auth;
use DB;
use Illuminate\Http\Request;

class PagoRepositories implements PagoInterface{
    public function getPago($id_pago){
        return Pagos::findOrFail($id_pago);
    
    }
    public function getPagination($request) {
        return Pagos::buscar($request->buscador)
        ->orderBy('id', 'DESC')
        ->paginate($request->paginador);
    }
    public function store($request) {
    $pago= new Pagos;
    $pago->com=$request->input('com');
    $pago->est=$request->input('est');
    $pago->mon=$request->input('mon');
    $pago->for=$request->input('for');
    $pago->cf=$request->input('cf');
    $pago->ef=$request->input('ef');
    $pago->save();
    return $pago;
    }
    public function update($request,$id_pago){
        $pago=Pagos::findOrFail($id_pago);
        $pago->com=$request->input('com');
        $pago->est=$request->input('est');
        $pago->mon=$request->input('mon');
        $pago->for=$request->input('for');
        $pago->cf=$request->input('cf');
        $pago->ef=$request->input('ef');
        $pago->save(); 

    }
     public function delete($id_pago) {
          /* $pago = Pagos::find($id_pago);
          $pago->delete(); */
          $pago = $this->getPago($id_pago);
          $pago->delete();
        }  
}