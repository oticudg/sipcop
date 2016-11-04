<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;

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
        	'fecha' => 'date|before:'.Carbon::tomorrow(),
		    'tipologia' => 'required|integer|exists:tipologias,id',
			'estatus' => 'required|integer|exists:estatus,id',
			'investigados' => 'required|array',
			'investigados.*.cedula' => 'required|integer|distinct|empleado',
			'investigados.*.complicidad' => 'required|integer|
					exists:complicidades,id',	
			'investigados.*.resultado' => 'required|integer|
					exists:resultados,id',
			'investigados.*.decisorio' => 'required|integer|
					exists:decisorios,id',
			'investigados.*.fecha' => 'date|before:'.Carbon::tomorrow()
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
