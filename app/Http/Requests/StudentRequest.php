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
            'email' => 'required|email|unique:students,email,'.$this->id,
            'name_ar'=> 'required',
            'name_en'=> 'required',
            'password'=> 'required',
            'gender_id'=> 'required',
            'nationalite_id'=> 'required',
            'bload_id'=> 'required',
            'date_Birth'=> 'required',
            'grade_id'=> 'required',
            'classroom_id'=> 'required',
            'section_id'=> 'required',
            'parant_id'=> 'required',
            'academic_year' => 'required',      

        ];
    }
    public function messages()
    {
        return [
            'email.required'=> 'this is required',
            'name_ar.required'=> 'this is required',
            'name_en.required'=> 'this is required',
            'password.required'=> 'this is required',
            'gender_id.required'=> 'this is required',
            'nationalite_id.required'=> 'this is required',
            'bload_id.required'=> 'this is required',
            'date_Birth.required'=> 'this is required',
            'grade_id.required'=> 'this is required',
            'classroom_id.required'=> 'this is required',
            'section_id.required'=> 'this is required',
            'parant_id.required'=> 'this is required',
            'academic_year.required'=> 'this is required',      

        ];
    }
}
