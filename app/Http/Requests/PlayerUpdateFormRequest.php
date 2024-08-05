<?php

namespace App\Http\Requests;

use App\Rules\Nationalcode;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PlayerUpdateFormRequest extends FormRequest
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

            'fullname' => ['bail','required','string','max:255',Rule::unique('players')->ignore($this->route('player')->id,'id')],
            'number' => ['required','integer'],
            'ex_team'=>'nullable|string|max:255',
            'nationalCode'=>['required',new Nationalcode()],
            'playerImage'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cardImage'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',



        ];
    }

}
