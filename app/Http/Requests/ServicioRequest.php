<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServicioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'nombre_servicio'=>'required',
          'descripcion_servicio'=>'required',
          'precio'=>'required|numeric|regex:/^[\d]{3,6}(\.[\d]{1,2})?$/',
          'oferta'=>'nullable',
          'precio_anterior'=>'nullable'
        ];
    }
}
