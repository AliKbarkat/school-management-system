<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [

            'email' =>'required|:teachers,Email,'.$this->id,
            'password' =>'required',
            'name_en' =>'required',
            'name_ar' =>'required',
            'specialization_id' =>'exists:specializations,id',
            'gender_id' =>'exists:genders,id',
            'joining_date' =>'required',
            'address' =>'required', 
        ];
    }
    public function messages()
    {
        return [
        
        ];
    }
}
