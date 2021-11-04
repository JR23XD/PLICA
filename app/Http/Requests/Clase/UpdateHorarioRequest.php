<?php
namespace App\Http\Requests\Clase;
use Illuminate\Foundation\Http\FormRequest;

class UpdateHorarioRequest extends FormRequest {
  public function authorize() {
    return true;
  }
  public function rules() {
    return [
      'fhi' => 'required|max:40|string',
      'fhf' => 'required|max:40|string',
      'mod' => 'required|max:40|string',
      'tip' => 'required|max:40|string',
        
      
    ];
  }
  public function attributes() {
    return [
      // Nombre del campo a mostrar.
      
    ];
  }
}