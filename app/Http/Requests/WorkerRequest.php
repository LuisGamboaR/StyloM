<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
                        
            'nombre'          => 'required|max:30',
            'rif'        => 'required|max:11',
            'direccion'        => 'required|string|max:50',           
            'telefono'        => 'required|integer|max:11',
            'correo'          => 'required|string|max:50', 
        
        ];

    }
}
