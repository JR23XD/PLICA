<?php
namespace App\Http\Controllers\Pagos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Pago\StorePagoRequest;
use App\Http\Requests\Pago\UpdatePagoRequest;
use App\Http\Repositories\pagos\PagoRepositories;

class PagosController extends Controller
{
    protected $pagoRepo;
    public function __construct(PagoRepositories $pagoRepositories)
    {
        $this->pagoRepo = $pagoRepositories;
    }
    public function index(Request $request)
    {
        $pagos = $this->pagoRepo->getPagination($request);
        return view('pagos.pago_index', compact('pagos'));
    }
    public function create()
    {
        return view('pagos.pago_create');
    }
    public function store(StorePagoRequest $request)
    {
        $this->pagoRepo->store($request);
        return back();
    }
    public function show($id_pago)
    {
        $pagos = $this->pagoRepo->getPago($id_pago);
        return view('pagos.pago_show', compact('pagos'));
    }
    public function edit($id_pago)
    {
        $pagos = $this->pagoRepo->getPago($id_pago);
        return view('pagos.pago_edit', compact('pagos'));
    }


    public function update(UpdatePagoRequest $request, $id_pago)
    {
        $pagos = $this->pagoRepo->update($request, $id_pago);
        return redirect()->route('pagos.index');
    }

    public function destroy($id_pago)
    {
        $this->pagoRepo->delete($id_pago);
        toastr()->success('¡Registro eliminado exitosamente!'); // Ruta archivo de configuración "vendor\yoeunes\toastr\config"
        return back();
    }
}
