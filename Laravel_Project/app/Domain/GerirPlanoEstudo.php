<?php

namespace App\Domain;

use App\Models\Curso;
use App\Models\Disciplina;
use App\Models\PlanoEstudo;
use Illuminate\Database\Eloquent\Collection;

class GerirPlanoEstudo
{
    public static function associarPlanoEstudoDisciplina(int $codigoCurso, int $codigoDisciplina)
    {
        $c = Curso::where('codigo', $codigoCurso)->first();
        $planoId = $c->plano_estudo->id;
        $d = Disciplina::where('codigo', $codigoDisciplina)->first();
        $p = PlanoEstudo::find($planoId);
        return $p->disciplinas()->attach($d);
    }

    public static function getDisciplinasFromCurso(int $id)
    {
        $c = Curso::where('id', $id)->first();
        $planoEstudos = $c->plano_estudo;
        return $planoEstudos->disciplinas;
    }
}
