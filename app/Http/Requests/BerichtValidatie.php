<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BerichtValidatie extends FormRequest
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
            'naam' => 'required|min:2',
            'bericht' => 'required|min:2|max:10',
            'email' => 'required|email',
            'foto' => "image|nullable"
        ];
    }
}
