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

    public static function getPlanoEstudoFromCurso(int $codigoCurso)
    {
        $ch = new CursoHandler();
        $c = $ch::getCurso($codigoCurso);
        $gpe = new GerirPlanoEstudo();
        $p = $gpe::getPlanoEstudo($c->id);
        return $p;
    }

    public static function associarPlanoEstudoDisciplina(int $idPlanoEstudo, int $codigoDisciplina)
    {
        $peh = new PlanoEstudoHandler();
        $p = PlanoEstudoHandler::getPlanoEstudo($idPlanoEstudo);
        $dh = new DisciplinaHandler();
        $d = $dh::getDisciplina($codigoDisciplina);
        return $p->disciplinas()->attach($d);
    }

    //NOT WORKING
    public static function deleteAssociacaoPlanoEstudoDisciplina(int $idPlanoEstudo, int $codigoDisciplina)
    {
        $p = PlanoEstudo::where('id', $idPlanoEstudo)->first();
        $dh = new DisciplinaHandler();
        $d = $dh::getDisciplina($codigoDisciplina);
        return $d->plano_estudo()->detach($p);
    }

    public static function getDisciplinasFromCurso(int $id)
    {
        $c = Curso::where('id', $id)->first();
        $planoEstudos = $c->plano_estudo;
        return $planoEstudos->disciplinas;
    }
}
