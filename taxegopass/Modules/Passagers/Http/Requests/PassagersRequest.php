<?php

namespace Modules\Passagers\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PassagersRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           'nomspass'=>'required',
           'genrepass'=>'required',
           'telephone'=>'required',
           'emailpass'=>'required',
           'ref_adresse'=>'required',
           'ref_vol'=>'required'
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
