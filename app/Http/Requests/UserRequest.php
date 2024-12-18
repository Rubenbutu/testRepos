<?php


namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserRequest extends FormRequest
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
            'nom' => ['string','max:200',"required"],
            'email' => ['email','unique:users','max:200',"required"],
            'postnom' =>[ 'string','max:200',"required"],
            'prenom' => ['string','max:200',"required"],
            'sexe' => ['string','max:200',"required"],
            'phone' => ['string','max:15',"required"],
            'adresse' =>[ 'string','max:200',"required"],
            // 'photo' => ['string','max:200'],
            'type' => ['max:10',"required"],
            'password' =>[ 'string',"required"],
            'service_id'=>["required"]
            
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
            "email.unique"=>"l'adresse email est déjà prise",
            "password.required"=>"le mot de passe est requis"
        ];
    }
}
