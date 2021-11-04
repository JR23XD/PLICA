<?php
namespace App\Http\Requests\Clase;
use Illuminate\Foundation\Http\FormRequest;

class StoreHorarioRequest extends FormRequest {
  public function authorize() {
    return true;
  }
  public function rules() {
    return [
      'fhi' => 'required',
      'fhf' => 'required',
      'tip' => 'required',
      'mod'=>'required',
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
      'fhi'  => 'fecha y hora inicial',
      'fhf' => 'fecha y hora final',
      'tip' => 'tipo de clase',
      'mod'=>'modalidad',
    ];
  }
}