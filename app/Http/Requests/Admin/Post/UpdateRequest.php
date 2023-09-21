<?php

namespace App\Http\Requests\Admin\Post;

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
            "content" => 'nullable|string',
            "preview_image" => 'nullable|file',
            "main_image" => 'nullable|file',
            "category_id" => 'nullable|integer|exists:categories,id',
            "project_id" => 'nullable|integer',
            "tag_ids" => 'nullable|array',
            "tag_ids.*" => 'nullable|integer|exists:tags,id',
            "date" => 'nullable|date',
            "time" => 'nullable|string',
            "report" => 'nullable|string',
            "mainpage_image" => 'nullable|file',
            "mainpage" => 'string',
            "mainpage_text" => 'nullable|string',
            "inside_link" => 'nullable|string',

        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Это поле необходимо для заполнения',
            'title.string' => 'Данные должны соответствовать строчному типу',
            'content.required' => 'Это поле необходимо для заполнения',
            'content.string' => 'Данные должны соответствовать строчному типу',
            'preview_image.required' => 'Это поле необходимо для заполнения',
            'preview_image.file' => 'Нужно выбрать файл',
            'main_image.required' => 'Это поле необходимо для заполнения',
            'main_image.file' => 'Нужно выбрать файл',
            'category_id.required' => 'Это поле необходимо для заполнения',
            'category_id.integer' => 'Id категории должен быть числом',
            'category_id.exists' => 'Id должен сужествовать',
            'tags_ids.array' => 'Нужно отправить массив',
        ];
    }

}
