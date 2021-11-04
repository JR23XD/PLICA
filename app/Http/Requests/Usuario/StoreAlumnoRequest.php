<?php
namespace App\Http\Requests\Usuario;
use Illuminate\Foundation\Http\FormRequest;

class StoreAlumnoRequest extends FormRequest {
  public function authorize() {
    return true;
  }
  public function rules() {
    return [
      'name' => 'required|max:40|string',
      'apes' => 'required|max:40|string',
      'call' => 'required|max:40|string',
      'num_int' => 'required|max:40|string',
      'num_ext' => 'required|max:40|string',
      'col' => 'required|max:40|string',
      'cp' => 'required|max:40|string',
      'mun' => 'required|max:40|string',
      'est' => 'required|max:40|string',
      'email' => 'required|max:75|email|unique:users,email',
      'telf' => 'required|max:40|string',
      'telm' => 'required|max:40|string',
      'obs' => 'required|max:40|string',
    ];
  }
  public function messages() {
    return [
      // Mensaje que se muestra en las diferentes validaciones, por ejemplo "required, max: min: ...".
      // 'name.required' => 'sdfzdsfzfd especificar los :attribute',
    ];
  }
  public function attributes() {
    return [
      // Nombre del campo a mostrar.
      'name'  => 'nombre(s)',
      'apes'  => 'apellidos',
      'call'  => 'calle',
      'num_int'  => 'numero interior',
      'num_ext'  => 'numero exterior',
      'col'  => 'colonia',
      'cp'  => 'codigo postal',
      'mun'  => 'municipio',
      'est'  => 'estado',
      'email'  => 'correo',
      'telf'  => 'telefono fijo',
      'telm'  => 'telefono celular',
      'obs'   => 'observaciones',
    ];
  }
  
}