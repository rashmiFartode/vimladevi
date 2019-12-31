<?php

namespace App\Http\Requests\Etenders;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEtendersRequest extends FormRequest
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
            'title' => 'required|sometimes|string| max:100 ',
            'etender_file' => 'required|sometimes|mimes:pdf,doc,docx|max:10000',
        ];
    }
}
