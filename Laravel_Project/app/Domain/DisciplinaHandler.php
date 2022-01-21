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
        $ph = new PautaHandler();
        $cadeira::createDisciplina($codigo, $designacao, $semestre, $ano, $plano);
        $ph::criarPautas($codigo);
        return Disciplina::where('codigo', $codigo)->first();
    }

    public static function editDisciplina(int $codigo, string $newDesignacao, int $newSemestre, int $newAno, string $newPlano)
    {
        $cadeira = new Cadeira();
        return $cadeira::editDisciplina($codigo, $newDesignacao, $newSemestre, $newAno, $newPlano);
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
