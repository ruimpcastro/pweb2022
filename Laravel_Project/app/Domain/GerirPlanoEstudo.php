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

    public static function associarPlanoEstudoDisciplina(int $idPlanoEstudo, int $codigoDisciplina)
    {
        $plano = PlanoEstudo::where('id', $idPlanoEstudo)->first();
        $p = $plano->plano_estudo;
        $d = Disciplina::where('codigo', $codigoDisciplina)->first();
        return $p->disciplinas()->attach($d);
    }

    public static function deleteAssociacaoPlanoEstudoDisciplina(int $idPlanoEstudo, int $codigoDisciplina)
    {
        $p = PlanoEstudo::where('id', $idPlanoEstudo)->first();
        $dh = new DisciplinaHandler();
        $d = $dh::getDisciplina($codigoDisciplina);
        return $d->plano_estudo($p->id)->delete();
    }

    public static function getDisciplinasFromCurso(int $id)
    {
        $c = Curso::where('id', $id)->first();
        $planoEstudos = $c->plano_estudo;
        return $planoEstudos->disciplinas;
    }
}
