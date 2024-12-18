<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class NaissanceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "Nom"=>['string','max:200','required'],
            "PostNom"=>['string','max:200','required'],
            "PreNom"=>['string','max:200','required'],
            "Sexe"=>['string','max:200','required'],
            "PointageNaissNormal"=>['string','max:200','required'],
            "PointageNaissNatPediatrie"=>['string','max:200','required'],

            "NomPere"=>['string','max:200'],
            "PostNomPere"=>['string','max:200'],
            "PreNomPere"=>['string','max:200'],
           "LieuNaissancePere"=>['string','max:200'],
           "DateNaissancePere"=>['string','max:200'],
           "proffesionPere"=>['string','max:200'],
           "NationalitePere"=>['string','max:200'],
           //mère
           "NomMere"=>['string','max:200'],
           "PostNomMere"=>['string','max:200'],
           "PreNomMere"=>['string','max:200'],
           "LieuNaissanceMere"=>['string','max:200'],
           "DateNaissanceMere"=>['string','max:200'],
           "proffesionMere"=>['string','max:200'],
           "NationaliteMere"=>['string','max:200'],
           "user_id"=>['required'],
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
            "Nom.required"=>"le nom du bébé est requis",
            "PostNom.required"=>"le PostNom du bébé est requis",
            "PreNom.required"=>"le PreNom du bébé est requis",
            "Sexe"=>"le Sexe du bébé est requis",
            "email.exists"=>"l'adresse email n'existe pas dans notre application",
            "password.required"=>"le mot de passe est requis"
        ];
    }
}
