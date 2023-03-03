<?php

namespace App\Http\Requests\Admin\UserSubjectClass;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            "user_id" => 'required|integer',
            "subject_id" => 'required|integer',
            "classes_ids" => 'array',
        ];
    }
    public function messages()
    {
        return [
            'user_id.required' => 'Это поле необходимо для заполнения',
            'subject_id.required' => 'Это поле необходимо для заполнения',
            'classes_ids.array' => 'Неверный формат данных',
        ];
    }
}
