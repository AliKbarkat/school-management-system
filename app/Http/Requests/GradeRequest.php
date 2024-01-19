<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GradeRequest extends FormRequest
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

            'name_en' => 'required|unique:grades,name_en,' . $this->id,
            'name_ar' => 'required|unique:grades,name_ar,' . $this->id,
            'descreption' => 'required',
        ];
    }
    public function messages()
    {
     return[];    
    }
}
