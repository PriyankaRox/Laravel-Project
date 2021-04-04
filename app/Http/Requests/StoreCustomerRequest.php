<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreCustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        $rules = [
            'name' => ['required', 'string',],
            'dob' => ['required', 'date',],
            'gender' => ['required'],
            'email' => ['required',],
            'mobile' => ['required'],
            'address' => ['required'],
            'city' => ['required'],
            'pin' => ['required'],
            'state' => ['required'],
            'country' => ['required',],
            'adhar_number' => ['required',],
            'religion' => ['required',],
            'caste' => ['required',],
            'category' => ['required',],
            'emergency_contacts' => ['required',],
        ];
        return $rules;
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
