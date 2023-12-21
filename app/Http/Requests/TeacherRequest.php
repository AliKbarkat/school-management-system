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

            'Email' =>'required|unique:teachers,Email,'.$this->id,
            'Password' =>'required',
            'Name_en' =>'required',
            'Name_ar' =>'required',
            'Specialization_id' =>'required',
            'Gender_id' =>'required',
            'joining_Date' =>'required',
            'Address' =>'required', 
        ];
    }
    public function messages()
    {
        return [
            'Email.required' => 'this is input required',
            'Password.required' =>'this is input required'  ,
            'Name_en.required' => 'this is input required',
            'Name_ar.required' => 'this is input required',
            'Specialization_id.required'=> 'this is input required' ,
            'Gender_id.required'=> 'this is input required' ,
            'joining_Date.required' => 'this is input required',
            'Address.required' => 'this is input required',
        ];
    }
}
