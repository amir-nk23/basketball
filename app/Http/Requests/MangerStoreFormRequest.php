<?php

namespace App\Http\Requests;

use App\Rules\Nationalcode;
use Illuminate\Foundation\Http\FormRequest;

class MangerStoreFormRequest extends FormRequest
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
            'national_code'=> ['required','unique:managers,national_code',new Nationalcode()],
            'mobile'=>'required|string|digits:11',
            'team_name'=>'required|string|min:3|max:255',
            'password'=>'required|min:6|confirmed',
        ];
    }

    protected function passedValidation()
    {

        $this->merge(['password' => bcrypt($this->input('password'))]);

    }
}
