<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SessRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'hall_id' => 'required|numeric',
            'movie_id' => 'required|numeric',
            'start_at' => 'required|date_format:Y-m-d H:i', //2005-08-15 15:52

        ];
    }
}
