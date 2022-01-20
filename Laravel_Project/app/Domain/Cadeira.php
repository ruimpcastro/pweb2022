<?php

namespace App\Domain;

use App\Models\AnoLetivo;
use App\Models\Disciplina;
use Illuminate\Database\Eloquent\Collection;

class Cadeira
{

    public static function createDisciplina(int $codigo, string $designacao, int $semestre, int $ano, string $plano): Disciplina
    {
        $d = new Disciplina();
        $a = AnoLetivo::find(1);
        $d->codigo = $codigo;
        $d->designacao = $designacao;
        $d->semestre = $semestre;
        $d->plano = $plano;
        $d->ano = $ano;
        $d->save();
        $d->ano_letivo()->attach($a);
        return  $d;

    }

    public static function getDisciplina(int $codigo): Disciplina
    {
        return Disciplina::where('codigo', $codigo)->first();
    }

    public static function getDisciplinas(): Collection
    {
        return Disciplina::all();
    }

    public static function associarAnoLetivo(int $codigoDisciplina, int $anoLetivo): Disciplina
    {
        $d = Disciplina::where('codigo', $codigoDisciplina)->first();
        $a = AnoLetivo::where('ano', $anoLetivo)->first();
        $d->ano_letivo()->associate($a);
        return $d;
    }
}

