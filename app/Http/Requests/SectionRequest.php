<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SectionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'name_en' => 'required',
            'name_ar' => 'required',
            'status'  => 'required',
            'classroom_id' => 'exists:class_rooms,id',
            'grade_id' => 'exists:grades,id',
        ];
    }
    public function messages()
    {
        return [
            
        ];
    }
}
