<?php

namespace App\Http\Requests\Results;

use Illuminate\Foundation\Http\FormRequest;

class CreateResultsRequest extends FormRequest
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
            'title' => 'required|max:100|unique:results',
            'file' => 'required|unique:results|mimes:pdf'
        ];
    }
}
