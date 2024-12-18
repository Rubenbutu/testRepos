<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DecesResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return  [
            "nom_defunt"=>$this->nom_defunt,
            "id"=>$this->id,
            "postnom_defunt"=>$this->postnom_defunt,
            "prenom_defunt"=>$this->prenom_defunt,
            "sexe_defunt"=>$this->sexe_defunt,
            "lieu_naissance_defunt"=>$this->lieu_naissance_defunt,
            "date_naissance_defunt"=>$this->date_naissance_defunt,
            
        ];
    }
}
