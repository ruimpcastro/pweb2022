<?php

namespace App\Domain;


class PlanoEstudoHandler
{

    public static function getPlanoEstudo(int $id, gerirPlanoEstudo $gerir)
    {
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
