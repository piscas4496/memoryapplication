<?php

namespace Modules\Passagers\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressesRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'pays'=>'required',
          'province'=>'required',
          'ville'=>'required',
          'commune'=>'required',
          'quartier'=>'required',
          'avenue'=>'required'
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
