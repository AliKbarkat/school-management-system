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
            'classroom_id' => 'required',
            'grade_id' => 'required|',
        ];
    }
    public function messages()
    {
        return [
            'name_en.required' => 'this is required',
            'name_ar.required' => 'this is required',
            'status.required' => 'this is required',
            'grade_id.required' => 'this is required',
            'classroom_id.required' => 'this is required',
        ];
    }
}
