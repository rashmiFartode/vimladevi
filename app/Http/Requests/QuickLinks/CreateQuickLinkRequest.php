<?php

namespace App\Http\Requests\QuickLinks;

use Illuminate\Foundation\Http\FormRequest;

class CreateQuickLinkRequest extends FormRequest
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
            'name' => 'required|string|unique:quick_links',
            'link' => 'required|url|unique:quick_links',
        ];
    }
}
