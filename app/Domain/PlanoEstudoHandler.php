<?php

namespace App\Domain;


class PlanoEstudoHandler
{
    public static function associarPlanoEstudoDisciplina(int $codigoCurso, int $codigoDisciplina, gerirPlanoEstudo $gerirPlanoEstudo)
    {
        return $gerirPlanoEstudo::associarPlanoEstudoDisciplina($codigoCurso, $codigoDisciplina);
    }

    public static function getDisciplinasFromCurso(int $codigoCurso)
    {
        $gerir = new GerirPlanoEstudo();
        return $gerir::getDisciplinasFromCurso($codigoCurso);
    }

}
