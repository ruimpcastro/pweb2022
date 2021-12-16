<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ResultadoResource extends JsonResource
{
    private $avaliacao;
    private $disciplina_id;
    private $pauta_id;
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        [
            'avalicao' => $avalicao,
            'disciplina_id' => $disciplina_id,
            'pauta_id' => $pauta_id,

        ];
    }
}
