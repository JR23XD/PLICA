<?php

namespace App\Http\Controllers\Users;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Usuario\UpdateAlumnoRequest;
use App\Http\Requests\Usuario\StoreAlumnoRequest;
use App\Http\Repositories\Users\AlumnoRepositories;
use BaconQrCode\Renderer\Color\Rgb;
use Spatie\Permission\Models\Role;
use App\Models\Clase;
use App\Models\Modalidad;

class AlumnoController extends Controller
{
    protected $alumnoRepo;
    public function __construct(AlumnoRepositories $alumnoRepositories) {
        $this->alumnoRepo = $alumnoRepositories;
    }
    public function index(Request $request) {
        
    }
    public function create() {
        $roles = Role::pluck('nom','id');
        $clases = Clase::pluck('nom','id');
        $modalidads = Modalidad::pluck('nom','id');
        return view('usuarios.usu_alumno', compact('roles','clases','modalidads'));
    }
    public function store(StoreAlumnoRequest $request) {
        $this->alumnoRepo->store($request);
        toastr()->success('Se ha registrado el alumno');
        return back();
    }
    public function show($id_usuario) {
    }
    public function edit($id_usuario) {
        
    }
    public function update(UpdateAlumnoRequest $request, $id_usuario) {
        
    }
    public function destroy($id_usuario) {
    }
}
