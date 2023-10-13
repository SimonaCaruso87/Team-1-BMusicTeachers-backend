<?php

namespace App\Http\Requests\Message;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMessageRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'teacher_id'=> 'nullable|exists:teachers,id',
            'name'=>'nullable',
            'content'=>'required'
        ];
    }

    public function messages(){
        return [
            'teacher_id.exists'=> 'il teacher non esiste',
            'content.required'=> 'il contenuto del messaggio è obligatorio'
        ];
    }
}
