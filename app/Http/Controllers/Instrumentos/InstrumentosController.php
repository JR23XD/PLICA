<?php
namespace App\Http\Controllers\Instrumentos;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Instrumento\StoreInstrumentoRequest;
use App\Http\Requests\Instrumento\UpdateInstrumentoRequest;
use App\Http\Repositories\Instrumento\InstrumentoRepositories;
use Spatie\Permission\Models\Role;

class InstrumentosController extends Controller {
    protected $instrumentoRepo;
    public function __construct(InstrumentoRepositories $instrumentoRepositories){
      $this->instrumentoRepo = $instrumentoRepositories;
    }
    public function index(Request $request) {
       // $resultado = \App\Models\User::find(1)->clases()->get();
      // $resultado = \App\Models\Clase::find(1)->users()->get();
        //dd($resultado);
        $instrumentos = $this->instrumentoRepo->getPagination($request);
        return view('instrumentos.ins_index', compact('instrumentos'));
    
    }
    public function create()
    {
         return view('instrumentos.ins_create');
    }
    public function store(StoreInstrumentoRequest $request)
    {
        $this->instrumentoRepo->store($request);
        return back();
    }
    public function show($id_instrumento)
    {
        $instrumentos= $this->instrumentoRepo->getInstrumento($id_instrumento);
        return view('instrumentos.ins_show',compact('instrumentos'));
    }
    public function edit($id_instrumento)
    {
         $instrumentos =$this->instrumentoRepo->getInstrumento($id_instrumento);
         $roles = Role::all();
        return view('instrumentos.ins_edit',compact('instrumentos','roles')); 
    } 


    public function update(UpdateInstrumentoRequest $request, $id_instrumento)
    {
        $this->instrumentoRepo->update($request,$id_instrumento);
        return redirect()->route('instrumentos.index'); 
    }

    public function destroy($id_instrumento)
    {
        $this->instrumentoRepo->delete($id_instrumento);
        toastr()->success('¡Instrumento eliminado exitosamente!'); // Ruta archivo de configuración "vendor\yoeunes\toastr\config"
        return back();
    }
    
}