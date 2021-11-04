<?php
namespace App\Http\Controllers\Clases;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Clase\StoreClaseRequest;
use App\Http\Requests\Clase\UpdateClaseRequest;
use App\Http\Repositories\Clases\ClaseRepositories;
use App\Http\Requests\Clase\StoreHorarioRequest;
use App\Http\Requests\Clase\UpdateHorarioRequest;
use App\Http\Repositories\Clases\HorarioRepositories;
use App\Models\User;
use App\Models\Horario;
use App\Models\Modalidad;

class ClaseController extends Controller {
    protected $claseRepo;
    protected $horarioRepo;
    public function __construct(ClaseRepositories $claseRepositories, HorarioRepositories $horarioRepositories) {
        $this->claseRepo = $claseRepositories;
        $this->horarioRepo = $horarioRepositories;
    }
    public function index(Request $request) {
        $clase = $this->claseRepo->getPagination($request);
        return view('clases.clas_index', compact('clase'));
    }
    public function create() {
        $users = User::pluck('name','id');
        return view('clases.clas_create', compact('users'));
        
    }

    public function store(StoreClaseRequest $request) {
        $this->claseRepo->store($request);
        toastr()->success('Success Message');
        return back();
    }
    public function show($id_clase) {
        $clase = $this->claseRepo->getClase($id_clase);
        return view('clases.clas_show', compact('clase'));
    }
    public function edit($id_clase) {
        $clase = $this->claseRepo->getClase($id_clase);
        $horarios = Horario::pluck('id');
        $users = User::pluck('name','id');
        return view('clases.clas_edit', compact('clase','users', 'horarios'));
    }
    public function update(UpdateClaseRequest $request, $id_clase) {
        $this->claseRepo->update($request, $id_clase);
        toastr()->success('Edición Realizada');
        return back();
    }
    public function destroy($id_clase) {
        $this->claseRepo->delete($id_clase);
        toastr()->success('Se ha eliminado el registro');
        return back();
    }
}