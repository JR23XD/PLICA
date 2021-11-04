<?php
namespace App\Http\Requests\Factura;
use Illuminate\Foundation\Http\FormRequest;

class UpdateFacturaRequest extends FormRequest {
  public function authorize() {
    return true;
  }
  public function rules() {
    return [
      'fdf' => 'required|max:40|string',
      'nrs' => 'required|max:40|string',
      'telf' => 'nullable|max:300|string',
      'telc' => 'required|max:40|string',
      'cal' =>  'required',
      'noi' => 'required|max:40|string',
      'noe' => 'required|max:40|string',
      'col' => 'required|max:40|string',
      'cp' => 'required|max:300|string',
      'mun' => 'required|max:40|string',
      'esta' =>  'required',
      'cfdi' => 'required|max:40|string',
      'conce' => 'required|max:300|string',
      'comen' => 'required|max:40|string',
    ];
  }
}