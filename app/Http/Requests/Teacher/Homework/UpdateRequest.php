<?php

namespace App\Http\Requests\Teacher\Homework;

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
            "content" => 'required|string',
            "user_id" => 'required|integer',
            "subject_id" => 'required|integer',
            "class_id" => 'required|integer',
            "set_for_date" => 'date',
        ];
    }
    public function messages()
    {
        return [
            'user_id.exists' => 'Id должен сужествовать',
            'class_id.exists' => 'Id должен сужествовать',
            'subject_id.exists' => 'Id должен сужествовать',
            'title.required' => 'Это поле необходимо для заполнения',
            'title.string' => 'Данные должны соответствовать строчному типу',
            'content.required' => 'Это поле необходимо для заполнения',
            'content.string' => 'Данные должны соответствовать строчному типу',
//            'preview_image.required' => 'Это поле необходимо для заполнения',
//            'preview_image.file' => 'Нужно выбрать файл',
//            'main_image.required' => 'Это поле необходимо для заполнения',
//            'main_image.file' => 'Нужно выбрать файл',
//            'category_id.required' => 'Это поле необходимо для заполнения',
//            'category_id.integer' => 'Id категории должен быть числом',
//            'category_id.exists' => 'Id должен сужествовать',
//            'tags_ids.array' => 'Нужно отправить массив',
        ];
    }

}
