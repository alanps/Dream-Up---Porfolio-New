<?php

namespace Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Album extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    // https://laravel.com/docs/5.7/validation#available-validation-rules
    public function rules()
    {
        //regras gerais
        $rules = [];
        $rules["nome"] = ["string"];
        $rules["descricao"] = ["string"];
        $rules["tipo"] = ["string", "in:secao,historia"];
        $rules["qtd_cliques"] = ["integer"];
        $rules["user_id"] = ["integer", "exists:users,id"];

        if ($this->isMethod('post')) {
            $rules["nome"][] = "required";
            $rules["descricao"][] = "required";
            $rules["tipo"][] = "required";
            //$rules["user_id"][] = "required";
        }
        
        else if ($this->isMethod('put')) {
            $rules["nome"][] = "unique:albums,nome,".$this->album->id;
        }

        return $rules;
    }

    public function messages()
    {
        return [];
    }
}
