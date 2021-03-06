<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateCursoRequest extends FormRequest
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
        $id = $this->segment(2);

        return [
            'name' => "required|min:3|max:255|unique:cursos,name,{$id}, id",
        ];
    }
    public function messages(){
        return [
            'name.required' => 'Campo nome é obrigatório',
            'name.min' => 'Ops! Nome muito curto',
            'name.unique'
        ];
    }
}
