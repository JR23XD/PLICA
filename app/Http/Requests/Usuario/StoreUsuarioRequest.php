<?php
namespace App\Http\Requests\Usuario;
use Illuminate\Foundation\Http\FormRequest;

class StoreUsuarioRequest extends FormRequest {
  public function authorize() {
    return true;
  }
  public function rules() {
    return [
      'name' => 'required|max:40|string',
      'apes' => 'required|max:40|string',
      'call' => 'required|max:40|string',
      'email' => 'required|max:75|email|unique:users,email',
      'password' => 'required|max:20|min:8|confirmed',
      
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
      'email'  => 'correo',
      'password'  => 'contraseña',
    ];
  }
  
}