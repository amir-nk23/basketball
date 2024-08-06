<?php

namespace App\Http\Requests;

use App\Rules\Nationalcode;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MangerUpdateFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

            'fullname' => 'required|string|min:3|max:255',
            'national_code'=> ['bail','required',new Nationalcode(),Rule::unique('managers')->ignore($this->route('manager')->id,'id')],
            'mobile'=>'required|string|digits:11',
            'team_name'=>'required|string|min:3|max:255',

        ];
    }
}
