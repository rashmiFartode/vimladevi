<?php

namespace App\Http\Requests\Attendances;

use Illuminate\Foundation\Http\FormRequest;

class CreateAttendanceRequest extends FormRequest
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
            'attendanceFor' => 'required|string',
            'title' => 'required|string|max:100',
            'file' => 'required|mimes:png,jpg,jpeg,pdf,doc,docx,ppt'
        ];
    }
}
