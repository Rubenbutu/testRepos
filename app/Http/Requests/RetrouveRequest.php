<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class RetrouveRequest extends FormRequest
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
            "NomR"=>['string','max:200','required'],
            "PostNomR"=>['string','max:200','required'],
            "PreNomR"=>['string','max:200','required'],
            "SexeR"=>['string','max:200','required'],
            "Age"=>['string','max:200','required'],
            "PieceIdentiteR"=>['string','max:200','required'],
            "PhotoR"=>['string','max:200','required'],
            "Date"=>['string','max:200','required'],
            "Lieu"=>['string','max:200','required'],
            "user_id"=>['max:200','required']
        ];
    }
    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json([
            "success"=>false,
            "status_code"=>422,
            "error"=>true,
            "message"=>"erreur de validation",
            "errorsList"=>$validator->errors()
        ]));
    }

    public function messages()
    {
        return [
            "Nom.required"=>"le nom du défunt est requis",
            "PostNom.required"=>"le PostNom du défunt est requis",
            "PreNom.required"=>"le PreNom du Défunt est requis",
            "Sexe?required"=>"le Sexe du Défunt est requis",
        ];
    }
}
