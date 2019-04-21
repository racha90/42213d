<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
            'name'    => 'required|unique:addresses|max:255',
            'city_id' => 'required|integer',
            'area_id' => 'required|integer',
            'street'  => 'nullable|max:255',
            'house'   => 'nullable|max:255',
            'info'    => 'nullable|max:255'
        ];
    }

    public function messages()
    {
        return [
            'name.required'        => 'Введите название адреса',
            'name.unique'          => 'Адрес с таким названием уже существует',
            'name.max'             => 'Вы ввели слишком длинное название адреса',
            'city_id.required'     => 'Выберите город',
            'area_id.required'     => 'Выберите район',
            'street.max'           => 'Вы ввели слишком длинное название улицы',
            'house.max'            => 'Вы ввели слишком длинное название дома',
            'info.max'             => 'Вы ввели слишком много информации'
        ];
    }
}
