<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PautaResource extends JsonResource
{
    private $chave;
    private $designacao;
    private $dirty;
    private $resultado_id;
    private $disciplina_id;
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        [
            'chave' => $chave,
            'designacao' => $designacao,
            'dirty' => $dirty,
            'resultado_id' => $resultado_id,
            'disciplina_id' => $disciplina_id,

        ];
    }
}
