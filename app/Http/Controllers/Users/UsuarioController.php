<?php
namespace App\Http\Controllers\Users;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Usuario\UpdateUsuarioRequest;
use App\Http\Requests\Usuario\StoreUsuarioRequest;
use App\Http\Repositories\Users\UsuarioRepositories;
use BaconQrCode\Renderer\Color\Rgb;
use Spatie\Permission\Models\Role;
use App\Models\Clase;
use App\Models\Modalidad;

class UsuarioController extends Controller {
    protected $usuarioRepo;
    public function __construct(UsuarioRepositories $usuarioRepositories) {
        $this->usuarioRepo = $usuarioRepositories;
    }
    public function index(Request $request) {
        $usuario = $this->usuarioRepo->getPagination($request);
       return view('usuarios.usu_index', compact('usuario'));
      

    }
    public function create() {
        $roles = Role::pluck('nom','id');
        $clases = Clase::pluck('nom','id');
        $modalidads = Modalidad::pluck('nom','id');
        return view('usuarios.usu_create', compact('roles','clases','modalidads'));
    }
    
    public function store(StoreUsuarioRequest $request) {
        $this->usuarioRepo->store($request);
        return back();
    }
    public function show($id_usuario) {
        $usuario = $this->usuarioRepo->getUsuario($id_usuario);
        return view('usuarios.usu_show', compact('usuario'));
    }
    public function edit($id_usuario) {
        $usuario = $this->usuarioRepo->getUsuario($id_usuario);
        $roles = Role::pluck('nom','id');
        $clases = Clase::pluck('nom','id');
        $modalidads = Modalidad::pluck('nom','id');
        return view('usuarios.usu_edit', compact('usuario','roles', 'clases', 'modalidads'));
    }
    public function update(UpdateUsuarioRequest $request, $id_usuario) {
        $this->usuarioRepo->update($request, $id_usuario);
        toastr()->success('Se ha editado el registro');
        return back();
    }
    public function destroy($id_usuario) {
        $this->usuarioRepo->delete($id_usuario);
        toastr()->success('Se ha eliminado el registro');
        return back();
    }
}