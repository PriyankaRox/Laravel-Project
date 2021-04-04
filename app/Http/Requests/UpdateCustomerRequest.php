<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;


class UpdateCustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string',],
            'dob' => ['required', 'string',],
            'gender' => ['required', 'string',],
            'email' => ['required', 'string',],
            'mobile' => ['required', 'string',],
            'address' => ['required', 'string',],
            'city' => ['required', 'string',],
            'pin' => ['required', 'string',],
            'state' => ['required', 'string',],
            'country' => ['required', 'string',],
            'adhar_number' => ['required', 'string',],
            'religion' => ['required', 'string',],
            'caste' => ['required', 'string',],
            'category' => ['required', 'string',],
            'emergency_contacts' => ['required', 'string',]
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
