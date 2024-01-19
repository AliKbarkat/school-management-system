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

            'name_ar' => 'required|unique:class_rooms,name,' . $this->id,
            'name_en' => 'required|unique:class_rooms,name,' . $this->id,
            'grade_id' => 'exists:grades,id',

        ];

    }
    public function messages()
    {
        return [
  
        ];
    }

}