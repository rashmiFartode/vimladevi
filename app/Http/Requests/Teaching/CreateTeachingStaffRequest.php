<?php

namespace App\Http\Requests\Teaching;

use Illuminate\Foundation\Http\FormRequest;

class CreateTeachingStaffRequest extends FormRequest
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
            'name' => 'required|string| max:100|unique:teaching_staff',
            'designation' => 'required|string',
            'department' => 'required|string',
            'file' => 'required|mimes:jpg,jpeg,png|max:10000',
        ];
    }
}
