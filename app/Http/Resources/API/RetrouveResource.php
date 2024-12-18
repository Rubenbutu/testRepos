<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RetrouveResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "nom"=>$this->nom,
            "postNom"=>$this->postnom,
            "date"=>$this->date,
            "sexe"=>$this->sexe,
            "age"=>$this->age,
            "date"=>$this->date,
            "lieu"=>$this->lieu,
        ];
    }
}
