<?php

namespace App\Domain;

use App\Models\Disciplina;
use Illuminate\Database\Eloquent\Collection;

class DisciplinaHandler
{

    public function createDisciplina(int $codigo, string $designacao, int $semestre, string $plano, Cadeira $cadeira): Disciplina
    {
        return $cadeira->createDisciplina($codigo, $designacao, $semestre, $plano);
    }

    public function getCadeira(int $codigo): Disciplina
    {
        $cadeira = new Cadeira();
        return $cadeira->getDisciplina($codigo);
    }

    public function getDisciplinas(): Collection
    {
        $cadeira = new Cadeira();
        return $cadeira->getDisciplinas();
    }
}
