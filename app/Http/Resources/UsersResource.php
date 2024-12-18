<?php

namespace App\Http\Resources;

use App\Http\Resources\API\RetrouveResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UsersResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"=>$this->id,
            "nom"=>$this->nom,
            "postnom"=>$this->postNom,
            "prenom"=>$this->prenom,
            "sexe"=>$this->sexe,
            "email"=>$this->email,
            "adresse"=>$this->adresse,
            "phone"=>$this->phone,
            // "password"=>$this->password,
            "type"=>$this->type,
            "service_id"=>$this->service_id,
            "retrouves"=>RetrouveResource::collection($this->whenLoaded("retrouves"))
        ];
    }
}

















