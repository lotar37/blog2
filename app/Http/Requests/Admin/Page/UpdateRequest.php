<?php

namespace App\Http\Requests\Admin\Page;

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
            "title" => 'required|string',
            "subtitle" => 'string',
            "route_name" => 'string',
            "content" => 'string',
            "long_content" => 'required',
            "main_image" => 'nullable|file',
         ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Это поле необходимо для заполнения',
            'title.string' => 'Данные должны соответствовать строчному типу',
            'content.required' => 'Это поле необходимо для заполнения',
            'content.string' => 'Данные должны соответствовать строчному типу',
            'main_image.required' => 'Это поле необходимо для заполнения',
            'main_image.file' => 'Нужно выбрать файл',
        ];
    }

}
