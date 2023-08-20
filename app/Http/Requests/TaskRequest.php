<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class TaskRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name" => ["sometimes", "string" ],
            "discription" => ["sometimes", "string"],
            'status' => ['sometimes', Rule::in(['done', 'pending', 'cancelled'])],
            'type' => ['sometimes', Rule::in(['regular', 'medium', 'urgent'])],
            'deadline' => ["sometimes", "date"]
        ];
    }
}
