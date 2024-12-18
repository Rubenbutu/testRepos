<?php

namespace App\Http\Resources\API;

use App\Http\Requests\AlertRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AlertResource extends JsonResource
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
            "latitude"=>$this->latitude,
            "longitude"=>$this->longitude,
            "ville"=>$this->ville,
            "commune"=>$this->commune,
            "service_id"=>$this->service_id,
            "status"=>$this->status,
            "created_at"=>$this->creayed_at
        ];
    }
}
