<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;

class CreateFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
           'name' => 'required',
           'email' => 'required',
           'password' => 'required',
           'level'=>'required'

        ];
    }
    public function messages()
    {
        return [
          'name.required' => 'Vui lòng nhập họ và tên',
          'email.required' => 'Vui lòng nhập email',
          'password.required' => 'Vui lòng nhập mật khẩu',

        ];
    }
}
