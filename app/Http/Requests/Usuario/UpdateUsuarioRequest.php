<?php
namespace App\Http\Requests\Usuario;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUsuarioRequest extends FormRequest {
  public function authorize() {
    return true;
  }
  public function rules() {
    return [
      'name' => 'required',
      'apes' => 'required',
    
    ];
  }
}