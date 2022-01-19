<?php

namespace App\Domain;

use App\Models\Aluno;
use App\Models\AnoLetivo;
use App\Models\Curso;
use App\Models\Disciplina;
use App\Models\PlanoEstudo;
use Illuminate\Database\Eloquent\Collection;

class Estudante
{
    public static function createAluno(int $numeroAluno, string $nome, int $codigoCurso): Aluno
    {
        $a = AnoLetivo::orderBy('created_at', 'desc')->first();
        $c = Curso::where('codigo', $codigoCurso)->first();
        $planoId = $c->plano_estudo->id;
        $p = PlanoEstudo::find($planoId);
        $aluno = new Aluno();
        $aluno->numero_aluno = $a->ano . $numeroAluno;
        $aluno->nome = $nome;
        $aluno->matricula = 1;
        $aluno->desistente = 0;
        $aluno->concluiu_curso = 0;
        $aluno->curso()->associate($c);
        $aluno->plano_estudo()->associate($p);
        $aluno->save();
        return $aluno;

    }

    public static function getAluno(int $id)
    {
        return Aluno::where('id', $id)->first();
    }

    public static function getAlunos(): Collection
    {
        return Aluno::all();
    }

    public static function matricularAluno(int $numeroAluno): int
    {
        $aluno = Aluno::where('numero_aluno', $numeroAluno)->first();
        $aluno->matricula +=1;
        return $aluno->matricula;
    }

    public static function matricularAlunoDisciplina(int $numeroAluno, int $codigoDisciplina)
    {
        $aluno = Aluno::where('numero_aluno', $numeroAluno)->first();
        $disciplina = Disciplina::where('codigo', $codigoDisciplina)->first();
        return $aluno->disciplinas()->attach($disciplina);
    }

    //NOT WORKING
    public static function numeroMatriculasDisciplina(int $numeroAluno, int $codigoDisciplina)
    {
        $e = new Estudante();
        $aluno = Aluno::where('numero_aluno', $numeroAluno)->first();
        $idAluno = $aluno->id;
        foreach($aluno->disciplinas as $disciplina){
            echo $disciplina->pivot . "\n";
        }
    }

    public static function marcarDesistente(int $numeroAluno)
    {
        $aluno = Aluno::where('numero_aluno', $numeroAluno)->first();
        $aluno->desistente = 1;
        $aluno->save();
        return $aluno->desistente;
    }

    public static function countDesistentes(): int
    {
        $estudante = new Estudante();
        $alunos = $estudante::getAlunos();
        $desistente = 0;
        foreach ($alunos as $aluno){
            if($aluno->desistente == 1) {
                $desistente += 1;
            }
        }
        return $desistente;
    }

    public static function marcarConcluido(int $numeroAluno)
    {
        $aluno = Aluno::where('numero_aluno', $numeroAluno)->first();
        $aluno->concluiu_curso = 1;
        $aluno->save();
        return $aluno->concluiu_curso;
    }
}
