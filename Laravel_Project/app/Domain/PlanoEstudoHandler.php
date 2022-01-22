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

    public static function getPlanoEstudoFromCurso(int $codigoCurso)
    {
        $gerir = new GerirPlanoEstudo();
        return $gerir::getPlanoEstudoFromCurso($codigoCurso);
    }


    public static function associarPlanoEstudoDisciplina(int $idPlanoEstudo, int $codigoDisciplina)
    {
        $gpe = new GerirPlanoEstudo();
        return $gpe::associarPlanoEstudoDisciplina($idPlanoEstudo, $codigoDisciplina);
    }

    public static function deleteAssociacaoPlanoEstudoDisciplina(int $idPlanoEstudo, int $codigoDisciplina)
    {
        $gpe = new GerirPlanoEstudo();
        return $gpe::deleteAssociacaoPlanoEstudoDisciplina($idPlanoEstudo, $codigoDisciplina);
    }

    public static function getDisciplinasFromCurso(int $id)
    {
        $gerir = new GerirPlanoEstudo();
        return $gerir::getDisciplinasFromCurso($id);
    }

}
