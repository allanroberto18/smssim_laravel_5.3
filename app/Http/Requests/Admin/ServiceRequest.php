<?php

namespace SMSSim\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:125',
            'price' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Nome',
            'price' => 'Preço'
        ];
    }
}
