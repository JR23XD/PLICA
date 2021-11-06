<?php
namespace App\Http\Controllers\Clases;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Clase\StoreHorarioRequest;
use App\Http\Requests\Clase\UpdateHorarioRequest;
use App\Http\Repositories\Clases\HorarioRepositories;
use App\Models\Clase;
use App\Models\User;

class HorarioController extends Controller {
    protected $horarioRepo;
    public function __construct(HorarioRepositories $horarioRepositories) {
        $this->horarioRepo = $horarioRepositories;
    }
    public function index(Request $request) {
    }
    public function create($id_clase) {
        $clases = Clase::pluck('nom','id');
        $alumnos = User::pluck('name','id');
      
        return view('clases.hor_create', compact('clases','alumnos','id_clase'));
        //dd($clases);
        
    }

    public function store(StoreHorarioRequest $request , $id_clase ) {
        $this->horarioRepo->store($request, $id_clase);

        toastr()->success('Success Message');
        return back();
    }
    public function show($id_horario) {
        $horario = $this->claseRepo->getClase($id_horario);
        return view('clases.clas_show', compact('horario'));
    }
    public function edit($id_horario) {
        $horario = $this->horarioRepo->getHorario($id_horario);
        return view('clases.hor_edit', compact('horario'));
    }
    public function update(UpdateHorarioRequest $request, $id_horario) {
        $this->horarioRepo->update($request, $id_horario);
        toastr()->success('Edición Realizada');
        return back();
    }
    public function destroy($id_horario) {
        $this->horarioRepo->delete($id_horario);
        toastr()->success('Se ha eliminado el registro');
        return back();
    }
}