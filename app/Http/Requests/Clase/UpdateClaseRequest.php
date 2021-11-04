<?php
namespace App\Http\Requests\Clase;
use Illuminate\Foundation\Http\FormRequest;

class UpdateClaseRequest extends FormRequest {
  public function authorize() {
    return true;
  }
  public function rules() {
    return [
      
    ];
  }
  public function attributes() {
    return [
      // Nombre del campo a mostrar.
      
    ];
  }
}