<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DisciplinaResource extends JsonResource
{

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'codigo' => $this->codigo,
            'designacao' => $this->designacao,
            'semestre' => $this->semestre,
            'plano' => $this->plano,
            'ano_letivo_id' => $this->ano_letivo_id,

        ];
    }
}
