<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ConfiguracionResource extends JsonResource
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
            'idioma' => $this->idioma,
            'pais' => $this->pais,
            'estado' => $this->estado,
            'usuario_id' => $this->usuario_id
        ];
    }
}
