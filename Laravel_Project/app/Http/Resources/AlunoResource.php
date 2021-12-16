<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AlunoResource extends JsonResource
{
    private $numero_aluno;
    private $nome;
    private $matricula;
    private $desistente;
    private $disciplina_id;
    private $curso_id;


    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'numero_aluno' => $numero_aluno,
            'nome' => $nome,
            'matricula' => $matricula,
            'desistente' => $desistente,
            'disciplina_id' => $disciplica_id,
            'curso_id' => $curso_id,
        ];
    }
}
