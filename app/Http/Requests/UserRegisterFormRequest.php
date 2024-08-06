<?php

namespace App\Http\Requests;

use App\Rules\Nationalcode;
use Illuminate\Foundation\Http\FormRequest;

class UserRegisterFormRequest extends FormRequest
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
            'fullname'=>'required|string|max:255',
            'national_code'=> ['bail','required','unique:managers,national_code',new Nationalcode()],
            'mobile'=>'required|digits:11',
            'team_name'=>'required|string',
            'password'=>'required|confirmed'

        ];
    }
}
