<?php

namespace Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Imagem extends FormRequest
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
        $rules["album_id"] = ["integer", "exists:albums,id"];
        $rules["grupo"] = ["string"];
        $rules["qtd_cliques"] = ["integer"];
        $rules["user_id"] = ["integer", "exists:users,id"];
       //$rules["imagem"][] = "image";

        if ($this->isMethod('post')) {
            //$rules["url"][] = "required";
            //$rules["album_id"][] = "required";
            $rules["imagem"][] = "required";
            //$rules["user_id"][] = "required";
        }
        
        else if ($this->isMethod('put')) {
            $rules["url"][] = "unique:imagens,url,".$this->imagem->id;
        }

        return $rules;
    }

    public function messages()
    {
        return [];
    }
}
