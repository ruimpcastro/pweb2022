<?php

namespace App\Domain;

use App\Models\AnoLetivo;
use App\Models\Disciplina;
use Illuminate\Database\Eloquent\Collection;

class DisciplinaHandler
{

    public static function createDisciplina(int $codigo, string $designacao, int $semestre, string $plano, Cadeira $cadeira): Disciplina
    {
        return $cadeira->createDisciplina($codigo, $designacao, $semestre, $plano);
    }

    public static function getDisciplina(int $codigo): Disciplina
    {
        $cadeira = new Cadeira();
        return $cadeira->getDisciplina($codigo);
    }

    public static function getDisciplinas(): Collection
    {
        $cadeira = new Cadeira();
        return $cadeira->getDisciplinas();
    }

    public static function associarAnoLetivo(int $ano): AnoLetivo
    {

        return AnoLetivo::where('ano', $ano)->first();
    }
}
