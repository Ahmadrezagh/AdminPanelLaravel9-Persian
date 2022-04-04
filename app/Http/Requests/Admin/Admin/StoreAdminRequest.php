<?php

namespace App\Http\Requests\Admin\Admin;

use App\Rules\IranPhoneNumberRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreAdminRequest extends FormRequest
{
    public function validated()
    {
        return array_merge(parent::validated(),['type_id' => 2]);
    }

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
            'email' => ['nullable','email','unique:users'],
            'image' => ['nullable','image','mimes:jpeg,png,jpg,gif,svg','max:4096'],
            'password' => ['nullable', 'confirmed', 'min:8'],
            'phone' => ['nullable',new IranPhoneNumberRule,'unique:users']
        ];
    }
}
