<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'email' => 'email|unique:students,email,' . $this->id,
            'name_ar' => 'required|string',
            'name_en' => 'required',
            'password' => 'required',
            'gender_id' => 'exists:genders,id',
             'nationalite_id' => 'exists:nationalities,id',
            'bload_id' => 'exists:bloads,id',
             'date_birth' => 'required',
            'grade_id' => 'exists:grades,id',
             'classroom_id' => 'exists:class_rooms,id',
             'section_id'=> 'exists:sections,id',
             'parant_id' => 'exists:my_parants,id',
             'academic_year' => 'required',
           

        ];
    }
    public function messages()
    {
        return [];
    }
}
