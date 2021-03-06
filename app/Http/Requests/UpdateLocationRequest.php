<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class UpdateLocationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'cid' => ['required',],
            'name' => ['required', 'string',],
            'street' => ['required', 'string',],
            'address' => ['required', 'string',],
            'city' => ['required', 'string',],
            'pin' => ['required', 'string',],
            'contact_person' => ['required', 'string',],
            'mobile' => ['required', 'string',]
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function authorize()
    {
        return true;
        //return Gate::allows('customer_access');
    }
}
