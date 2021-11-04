<?php
namespace App\Http\Requests\Pago;
use Illuminate\Foundation\Http\FormRequest;

class UpdatePagoRequest extends FormRequest {
  public function authorize() {
    return true;
  }
  public function rules() {
    return [
      'com' => 'required|max:40|string',
      'est' => 'required|max:40|string',
      'mon' => 'nullable|max:300|string',
      'for' => 'required|max:40|string',
      'cf' =>  'required',
      'ef' => 'required|max:40|string',
    ];
  }
 }
