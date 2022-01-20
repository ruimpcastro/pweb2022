<?php

namespace App\Domain;

use App\Models\Aluno;
use Illuminate\Database\Eloquent\Collection;

class AlunoHandler
{
    public static function createAluno(int $numeroAluno, string $nome, int $codigoCurso, Estudante $estudante): Aluno
    {
        return $estudante::createAluno($numeroAluno, $nome, $codigoCurso);
    }
    public static function getCursoFromAluno(int $numeroAluno)
    {
        $estudante = new Estudante();
        return $estudante::getCursoFromAluno($numeroAluno);
    }

    public static function getAluno(int $numeroAluno)
    {
        $estudante = new Estudante();
        return $estudante::getAluno($numeroAluno);
    }
    public static function getAlunos(): Collection
    {
        $estudante = new Estudante();
        return $estudante::getAlunos();
    }

    public static function matricularAluno(int $numeroAluno): int
    {
        $estudante = new Estudante();
        return $estudante::matricularAluno($numeroAluno);
    }

    public static function matricularAlunoDisciplina(int $numeroAluno, int $codigoDisciplina)
    {
        $estudante = new Estudante();
        return $estudante::matricularAlunoDisciplina($numeroAluno, $codigoDisciplina);
    }

    public static function numeroMatriculasDisciplina(int $numeroAluno, int $codigoDisciplina)
    {
        $estudante = new Estudante();
        //return $estudante::numeroMatriculasDisciplina($numeroAluno, $codigoDisciplina);
    }

    public static function marcarDesistente(int $numeroAluno)
    {
        $estudante = new Estudante();
        return $estudante::marcarDesistente($numeroAluno);
    }

    public static function marcarConcluido(int $numeroAluno)
    {
        $estudante = new Estudante();
        return $estudante::marcarConcluido($numeroAluno);
    }
}
