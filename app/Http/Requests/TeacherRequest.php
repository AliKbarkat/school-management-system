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

            'email' =>'required|unique:teachers,Email,'.$this->id,
            'password' =>'required',
            'name_en' =>'required',
            'name_ar' =>'required',
            'specialization_id' =>'required',
            'gender_id' =>'required',
            'joining_date' =>'required',
            'address' =>'required', 
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'this is input required',
            'password.required' =>'this is input required'  ,
            'name_en.required' => 'this is input required',
            'name_ar.required' => 'this is input required',
            'specialization_id.required'=> 'this is input required' ,
            'gender_id.required'=> 'this is input required' ,
            'joining_date.required' => 'this is input required',
            'address.required' => 'this is input required',
        ];
    }
}
