<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassRoomRequest extends FormRequest
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

            'name_class_ar' => 'required|unique:class_rooms,name_class_ar,' . $this->id,
            'name_class_en' => 'required|unique:class_rooms,name_class_en,' . $this->id,
            'grade_id' => 'required',

        ];

    }
    public function messages()
    {
        return [
            'name_class_ar.rquired' => '{{__(validation.required)}}',
            'name_class_en.rquired' => '{{__(validation.required)}}',
            'grade_id.rquired' => '{{__(validation.required)}}',
        ];
    }

}