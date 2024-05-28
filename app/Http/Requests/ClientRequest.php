<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'name' => 'required|string',
            'country_code' => 'string|required',
            'phone' => 'string|required',
            'address' => 'string|required',
            'email' => 'required|string|email',
            'password' => 'required|string',
            'image' =>'image|mimes:jpeg,jpg,png,gif|max:2048|required',
        ];
    }
}