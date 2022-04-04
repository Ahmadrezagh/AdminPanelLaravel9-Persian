<?php

namespace App\Http\Requests\Admin\User;

use App\Rules\IranPhoneNumberRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
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
            'name' => ['required','string'],
            'email' => ['nullable','email',Rule::unique('users','email')->ignore($this->id,'id')],
            'image' => ['nullable','image','mimes:jpeg,png,jpg,gif,svg','max:4096'],
            'password' => ['nullable', 'confirmed', 'min:8'],
            'phone' => ['nullable',new IranPhoneNumberRule,Rule::unique('users','phone')->ignore($this->id,'id')]
        ];
    }
}
