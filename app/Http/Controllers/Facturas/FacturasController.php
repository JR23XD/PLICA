<?php
namespace App\Http\Controllers\Facturas;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Factura\StoreFacturaRequest;
use App\Http\Requests\Factura\UpdateFacturaRequest;
use App\Http\Repositories\Factura\FacturaRepositories;

class FacturasController extends Controller {
    protected $facturaRepo;
    public function __construct(FacturaRepositories $FacturaRepositories){
      $this->facturaRepo = $FacturaRepositories;
    }
    public function index(Request $request) {
        $facturas = $this->facturaRepo->getPagination($request);
        return view('facturas.factura_index', compact('facturas'));
    
    }
    public function create()
    {
         return view('facturas.factura_create');
    }
    public function store(StoreFacturaRequest $request)
    {
        $this->facturaRepo->store($request);
        return back();
    }
    public function show($id_factura)
    {
        $facturas= $this->facturaRepo->getFactura($id_factura);
        return view('facturas.factura_show',compact('facturas'));
    }
    public function edit($id_factura)
    {
         $facturas =$this->facturaRepo->getFactura($id_factura);
        return view('facturas.factura_edit',compact('facturas')); 
    } 


    public function update(UpdateFacturaRequest $request, $id_factura)
    {
        $this->facturaRepo->update($request,$id_factura);
        return back(); 
    }

    public function destroy($id_factura)
    {
        $this->facturaRepo->delete($id_factura);
        toastr()->success('¡factura eliminado exitosamente!'); // Ruta archivo de configuración "vendor\yoeunes\toastr\config"
        return back();
    }
    
}