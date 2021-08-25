<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactoRequest extends FormRequest
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
          'direccion' => 'required',
          'colonia' => 'required',
          'cp' => 'required|numeric',
          'ciudad' => 'required',
          'email' => 'required|email',
          'telefono' => 'required',
          'hora_semanal' => 'required',
          'fin_semana' => 'required'
        ];
    }
}
