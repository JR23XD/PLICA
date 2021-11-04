<?php

namespace App\Http\Controllers\Users;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Usuario\UpdateProfesorRequest;
use App\Http\Requests\Usuario\StoreProfesorRequest;
use App\Http\Repositories\Users\ProfesorRepositories;
use BaconQrCode\Renderer\Color\Rgb;
use Spatie\Permission\Models\Role;
use App\Models\Clase;
use App\Models\Modalidad;

class ProfesorController extends Controller
{
    protected $profesorRepo;
    public function __construct(ProfesorRepositories $profesorRepositories) {
        $this->profesorRepo = $profesorRepositories;
    }
    public function index(Request $request) {
        
    }
    public function create() {
        $roles = Role::pluck('nom','id');
        $clases = Clase::pluck('nom','id');
        $modalidads = Modalidad::pluck('nom','id');
        return view('usuarios.usu_profesor', compact('roles','clases','modalidads'));
    }
    public function store(StoreProfesorRequest $request) {
        $this->profesorRepo->store($request);
        return back();
    }
    public function show($id_usuario) {
    }
    public function edit($id_usuario) {
        
    }
    public function update(UpdateProfesorRequest $request, $id_usuario) {
        
    }
    public function destroy($id_usuario) {
    }
}
