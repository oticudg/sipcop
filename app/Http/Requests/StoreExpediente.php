<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreExpediente extends FormRequest
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
        	'fecha' => 'bail|date|before:tomorrow',
		    'tipologia' => 'bail|required|integer|exists:tipologias,id',
			'estatus' => 'bail|required|integer|exists:estatus,id',
			'investigados' => 'bail|required|array',
			'investigados.*.cedula' => 'bail|required|integer|distinct|
				empleado',
			'investigados.*.complicidad' => 'bail|required|integer|
					exists:complicidades,id',	
			'investigados.*.resultado' => 'bail|required|integer|
					exists:resultados,id',
			'investigados.*.decisorio' => 'bail|required|integer|
					exists:decisorios,id',
			'investigados.*.fecha' => 'bail|date|before:tomorrow'
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

        $validator->sometimes('investigados.*.fecha', 
							  'date_after_expediente:fecha', 
			function($input){
            
            if(isset($input->fecha))
				return true;

			return false;
		});

        return $validator;
    }
}
