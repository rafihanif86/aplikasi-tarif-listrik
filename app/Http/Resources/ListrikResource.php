<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ListrikResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'kwh penggunaan' => $this->kwh_perbulan,
            'tagihan' => $this->tagihan,
            'user' => new UserResource($this->user),
            'tarif' => new TarifResource($this->tarif),
        ];
    }
}
