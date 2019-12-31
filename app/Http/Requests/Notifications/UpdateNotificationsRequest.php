<?php

namespace App\Http\Requests\Notifications;

use Illuminate\Foundation\Http\FormRequest;

class UpdateNotificationsRequest extends FormRequest
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
            'title' => 'required|string| max:100 | unique:notifications',
            'notification_file' => 'required|sometimes|mimes:pdf|max:10000',
            'new' => 'required|sometimes'
        ];
    }
}
