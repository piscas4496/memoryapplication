<?php

namespace Modules\Paiements\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaiementRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           'motif'=>'required',
           'datepaiement'=>'required',
           'ref_passager'=>'required',
           'ref_agent'=>'required',
           'ref_typefrais'=>'required'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
