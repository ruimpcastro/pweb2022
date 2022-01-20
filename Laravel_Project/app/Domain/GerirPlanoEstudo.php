<?php

namespace App\Domain;

use App\Models\Curso;
use App\Models\Disciplina;
use App\Models\PlanoEstudo;
use Illuminate\Database\Eloquent\Collection;

class GerirPlanoEstudo
{
    public static function getPlanoEstudo(int $id): PlanoEstudo
    {
        return PlanoEstudo::where('id', $id)->first();
    }
    //TODO Criar página para associar Plano de estudo à Disciplina
    public static function associarPlanoEstudoDisciplina(int $id, int $codigoDisciplina)
    {
        $c = Curso::where('id', $id)->first();
        $p = $c->plano_estudo;
        $d = Disciplina::where('codigo', $codigoDisciplina)->first();
        return $p->disciplinas()->attach($d);
    }

    public static function getDisciplinasFromCurso(int $id)
    {
        $c = Curso::where('id', $id)->first();
        $planoEstudos = $c->plano_estudo;
        return $planoEstudos->disciplinas;
    }
}
