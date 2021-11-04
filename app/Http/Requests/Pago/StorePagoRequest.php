<?php
namespace App\Http\Requests\Pago;

use Illuminate\Foundation\Http\FormRequest;

class StorePagoRequest extends FormRequest
{
  public function authorize()
  {
    return true;
  }
  public function rules()
  {
    return [
      'com' => 'required|max:40|string',
      'est' => 'required|max:40|string',
      'mon' => 'required|max:30|alpha_num',
      'for' => 'required|max:40|string',
      'cf' =>  'required',
      'ef' => 'required|max:40|string',
    ];
  }
  public function attributes()
  {
    return [
      // Nombre del campo a mostrar.
      'com'    => 'comprobante',
      'est'  => 'estatus',
      'mon' =>  'monto',
      'for' => 'forma',
      'cf' =>  'código de facturación',
      'ef' => 'estatus de factura',
    ];
  }
}