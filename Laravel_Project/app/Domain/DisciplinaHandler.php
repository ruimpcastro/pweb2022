<?php

namespace App\Domain;

use App\Models\AnoLetivo;
use App\Models\Disciplina;
use Illuminate\Database\Eloquent\Collection;

class DisciplinaHandler
{

    public static function createDisciplina(int $codigo, string $designacao, int $semestre, int $ano, string $plano): Disciplina
    {
        $cadeira = new Cadeira();

        return $cadeira::createDisciplina($codigo, $designacao, $semestre, $ano, $plano);
    }

    public static function getDisciplina(int $codigo)
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
