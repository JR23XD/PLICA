<?php
namespace App\Http\Requests\Factura;
use Illuminate\Foundation\Http\FormRequest;

class StoreFacturaRequest extends FormRequest {
  public function authorize() {
    return true;
  }
  public function rules() {
    return [
      'fdf'   =>    'required|max:40|string',
      'nrs'   =>    'required|max:40|string',
      'telf'  =>    'required|max:300|string',
      'telc'  =>    'required|max:40|string',
      'cal'   =>    'required',
      'noi'   =>    'required|max:40|string',
      'noe'   =>    'required|max:40|string',
      'col'   =>    'required|max:40|string',
      'cp'    =>    'required|max:40|string',
      'mun'   =>    'required|max:40|string',
      'esta'  =>    'required',
      'cfdi'  =>    'required|max:40|string',
      'conce' =>    'required|max:40|string',
      'comen' =>    'required|max:40|string',
    ];
  }
  public function attributes() {
    return [
      // Nombre del campo a mostrar.
      'fdf'   =>    'Fecha de factura',
      'nrs'   =>    'Nombre o razon S.',
      'telf'  =>    'Teléfono fijo',
      'telc'  =>    'Teléfono celular',
      'cal'   =>    'Calle',
      'noi'   =>    'No.Interior',
      'noe'   =>    'No.Exterior',
      'col'   =>    'Col',
      'cp'    =>    'CP',
      'mun'   =>    'Municipio',
      'esta'  =>    'EStado',
      'cfdi'  =>    'Uso de CFDI',
      'conce' =>    '>Concepto',
      'comen' =>    'Comentarios',
      
    ];
  }
}