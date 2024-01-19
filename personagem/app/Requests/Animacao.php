<?php

namespace Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Animacao extends FormRequest
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
        $rules["url"] = ["string"];
        $rules["descricao"] = ["string"];
        $rules["grupo"] = ["string"];
        $rules["qtd_cliques"] = ["integer"];
        $rules["user_id"] = ["integer", "exists:users,id"];
        //$rules["animacao"][] = "image";

        if ($this->isMethod('post')) {
            //$rules["url"][] = "required";
            $rules["grupo"][] = "required";
            $rules["animacao"][] = "required";
            //$rules["user_id"][] = "required";
        }
        
        else if ($this->isMethod('put')) {
            $rules["url"][] = "unique:animacoes,url,".$this->animacao->id;
        }

        return $rules;
    }

    public function messages()
    {
        return [];
    }
}
