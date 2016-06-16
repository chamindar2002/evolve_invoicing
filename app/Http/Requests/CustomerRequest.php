<?php

namespace EvolveInvoicing\Http\Requests;

use EvolveInvoicing\Http\Requests\Request;



class CustomerRequest extends Request
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
            'name' => 'required|max:100',
            'email' => 'required|email',
            'phone' => 'required|min:10',
            'country_id' => 'required'
        ];
    }
}

