<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSettingRequest extends FormRequest
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
            'address'=>'required|string',
            'email'=>'required|email',
            'phone'=>'required',
            'facebook'=>'nullable|url',
            'linkedin'=>'nullable|url',
            'youtube'=>'nullable|url',
            'instagram'=>'nullable|url',
            'twitter'=>'nullable|url',
        ];
    }
    public function attributes(){
        return [
            'email'=>__('keyWords.email'),
            'address'=>__('keyWords.address'),
            'phone'=>__('keyWords.phone'),
            'facebook'=>__('keyWords.facebook'),
            'linkedin'=>__('keyWords.linkedin'),
            'youtube'=>__('keyWords.youtube'),
            'instagram'=>__('keyWords.instagram'),
            'twitter'=>__('keyWords.twitter'),
        ];
        }
}

