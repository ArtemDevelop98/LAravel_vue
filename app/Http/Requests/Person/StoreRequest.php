<?php

namespace App\Http\Requests\Person;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name'=>'required|string',
            'age'=>'required|integer',
            'job'=>'required|string'
        ];
    }

    public function massages(){

        return[
            'name.required'=>'Это поле необходимо для заполнения',
            'name.string'=>'Данные должны соответствовать строчному типу',
            'age.required'=>'Это поле необходимо для заполнения',
            'age.integer'=>'Данные должны соответствовать числовому типу',
            'job.required'=>'Это поле необходимо для заполнения',
            'job.string'=>'Данные должны соответствовать строчному типу',

        ];


    }
}
