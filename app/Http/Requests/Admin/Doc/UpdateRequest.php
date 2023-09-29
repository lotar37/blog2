<?php

namespace App\Http\Requests\Admin\Doc;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            "description" => 'required|string',
            "doc" => 'required|file',
        ];
    }
    public function messages()
    {
        return [
            'description.string' => 'Данные должны соответствовать строчному типу',
            'description.required' => 'Это поле необходимо для заполнения',
            'doc.required' => 'Это поле необходимо для заполнения',
            'doc.file' => 'Нужно выбрать файл',
        ];
    }

}
