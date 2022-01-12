<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AlunoResource extends JsonResource
{

    public static $wrap = 'Aluno';

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'numero_aluno' => $this->numero_aluno,
            'nome' => $this->nome,
            'matricula' => $this->matricula,
            'desistente' => $this->desistente,
            'curso_concluido' => $this->concluiu_curso,
            'curso' => $this->curso->designacao,
        ];
    }
}
