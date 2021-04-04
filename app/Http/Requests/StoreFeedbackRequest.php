<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;

class StoreFeedbackRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            'cid' => ['required'],
            'title' => ['required', 'string',],
            'type' => ['required', 'string',],
            'description' => ['required', 'string',],
            'comment' => ['required', 'string',],
            'status' => ['required', 'string',],
        ];
        return $rules;
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    
    public function authorize()
    {
        return true;
        //return Gate::allows('feedback_access');
    }
}
