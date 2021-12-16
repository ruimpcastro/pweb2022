<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DisciplinaResource extends JsonResource
{
    private $codigo;
    private $designacao;
    private $semestre;
    private $plano;
    private $ano_letivo_id;

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'codigo' => $codigo,
            'designacao' => $designacao,
            'semestre' => $semestre,
            'plano' => $plano,
            'ano_letivo_id' => $ano_letivo_id,

        ];
    }
}
