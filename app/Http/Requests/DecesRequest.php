<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
class DecesRequest extends FormRequest
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
            "NomDefunt"=>['string','max:200','required'],
             "PostNomDefunt"=>['string','max:200','required'],
             "PreNomDefunt"=>['string','max:200','required'],
             "SexeDefunt"=>['string','required'],
             "LieuNaissanceDefunt"=>['string','max:200'],
             "DateNaissanceDefunt"=>['string','required'],
             "proffesionDefunt"=>['string','max:200'],
             "EtatCiviDefunt"=>['string','max:20'],
             "NomConjoint(e)"=>['string','max:200'],
             "DateDeces"=>['string','max:200'],
            //  Papa
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
            "email.required"=>"l'email est requis",
            "email.email"=>"l'adresse email non valide",
            "email.exists"=>"l'adresse email n'existe pas dans notre application",
            "password.required"=>"le mot de passe est requis"
        ];
    }
}
