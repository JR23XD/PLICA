<?php
namespace App\Http\Requests\Clase;
use Illuminate\Foundation\Http\FormRequest;

class UpdateHorarioRequest extends FormRequest {
  public function authorize() {
    return true;
  }
  public function rules() {
    return [
      'fhi' => 'required|max:20|numeric',
      'fhf' => 'required|max:20|numeric',
      'mod' => 'required|max:10|string',
      'tip' => 'required|max:10|string',
        
      
    ];
  }
  public function attributes() {
    return [
      // Nombre del campo a mostrar.
      
    ];
  }
}