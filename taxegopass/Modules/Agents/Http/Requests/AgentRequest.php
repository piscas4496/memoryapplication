<?php

namespace Modules\Agents\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AgentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nomsag'=>'required',
            'genreag'=>'required',
            'datenaissag'=>'required',
            'mobile'=>'required',
           'passwordag'=>'required'
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
