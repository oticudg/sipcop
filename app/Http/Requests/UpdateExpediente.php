<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateExpediente extends FormRequest
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
        	'tipologia' => 'bail|integer|exists:tipologias,id',
			'estatus'  => 'bail|integer|exists:estatus,id',
			
			// add_investigados
			'add_investigados' => 'array',
			'add_investigados.*.cedula' => 'bail|required|integer|distinct|
				empleado|empleado_not_expediente',
			'add_investigados.*.complicidad' => 'bail|required|integer|
				exists:complicidades,id',
			'add_investigados.*.resultado' => 'bail|required|integer|
				exists:resultados,id',
			'add_investigados.*.decisorio' => 'bail|required|integer|
				exists:decisorios,id',
			'add_investigados.*.fecha' => 'bail|date|before:tomorrow',
			
			// edit_investigados	
			'edit_investigados' => 'array',
			'edit_investigados.*.investigacion' => 'bail|required|integer|
				distinct|exists:investigados,id|in_expediente',
			'edit_investigados.*.complicidad' => 'bail|required|integer|
				exists:complicidades,id',
			'edit_investigados.*.decisorio' => 'bail|required|integer|
				exists:decisorios,id',
			'edit_investigados.*.resultado' => 'bail|required|integer|
				exists:resultados,id'	
        ];
    }
}
