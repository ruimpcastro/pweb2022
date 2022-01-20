<?php

namespace App\Domain;


use App\Models\PlanoEstudo;

class PlanoEstudoHandler
{

    public static function getPlanoEstudo(int $id): PlanoEstudo
    {
        $gerir = new GerirPlanoEstudo();
        return $gerir::getPlanoEstudo($id);
    }
    public static function associarPlanoEstudoDisciplina(int $codigoCurso, int $codigoDisciplina, gerirPlanoEstudo $gerirPlanoEstudo)
    {
        return $gerirPlanoEstudo::associarPlanoEstudoDisciplina($codigoCurso, $codigoDisciplina);
    }

    public static function getDisciplinasFromCurso(int $id)
    {
        $gerir = new GerirPlanoEstudo();
        return $gerir::getDisciplinasFromCurso($id);
    }

}
