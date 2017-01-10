<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

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
			'fecha' => 'bail|date|before:tomorrow|
				date_before_investigados_update',
			
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
			'add_investigados.*.fecha' => 'bail|date|before:tomorrow|
			date_after_expediente_update',
			
			// edit_investigados	
			'edit_investigados' => 'array',
			'edit_investigados.*.investigacion' => 'bail|required|integer|
				distinct|exists:investigados,id|in_expediente',
			'edit_investigados.*.complicidad' => 'bail|required|integer|
				exists:complicidades,id',
			'edit_investigados.*.decisorio' => 'bail|required|integer|
				exists:decisorios,id',
			'edit_investigados.*.resultado' => 'bail|required|integer|
				exists:resultados,id',
			'edit_investigados.*.fecha' => 'bail|date|before:tomorrow|
			date_after_expediente_update',	
        ];
    }

    /**
     * Get the validator instance for the request.
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function getValidatorInstance()
    {
        $validator = parent::getValidatorInstance();

        $validator->sometimes('add_investigados.*.fecha', 
							  'date_after_expediente:fecha', 
			function($input){
            
            if(isset($input->fecha))
				return true;

			return false;
		});

        return $validator;
    }

    /**
     * Format the errors from the given Validator instance.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return array
     */
    protected function formatErrors(Validator $validator)
    {
        return $validator->messages()->all();
    }

}
