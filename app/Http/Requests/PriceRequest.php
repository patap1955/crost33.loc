<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PriceRequest extends FormRequest
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
            "title" => "required|max:255|min:3",
            "rate" => "required|numeric",
            "page_id" => "required|integer",
            "unit" => "required",
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Поле Наименование не дожно быть пустым',
            'title.max' => 'Поле Наименование должно быть не более 255 символов',
            'title.min' => 'Поле Наименование должно быть не менее 3 символов',
            'rate.required' => 'Поле с Ценой не должно быть пустым',
            'rate.numeric' => 'Поле с Ценой должно быть числом',
        ];
    }
}
