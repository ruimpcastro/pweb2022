<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    public function disciplinas()
    {
        return $this->belongsToMany(Disciplina::class);
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class);
    }

    public function plano_estudo()
    {
        return $this->belongsTo(PlanoEstudo::class);
    }

    public function resultado()
    {
        return $this->belongsToMany(Resultado::class);
    }

    public function anoLetivo()
    {
        return $this->belongsToMany(AnoLetivo::class);
    }

    public static function createAluno(int $numero_aluno, string $nome, string $curso)
    {
        $a = new Aluno();
        $a->numero_aluno = $numero_aluno;
        $a->nome = $nome;
        $a->matricula = 1;
        $a->desistente = 0;
        $a->concluiu_curso = 0;
        $c = Curso::where('designacao', $curso)->firstOrFail();
        $a->curso()->associate($c);
        $a->save();
    }

    public static function createMockData()
    {
        $ci = Curso::find(1);
        $cm = Curso::find(2);

        $pi = PlanoEstudo::find(1);
        $pm = Planoestudo::find(2);

        $aa = new Aluno();
        $aa->numero_aluno = 20210101;
        $aa->nome = "Rui";
        $aa->matricula = 3;
        $aa->desistente = 0;
        $aa->concluiu_curso = 0;
        $aa->curso()->associate($ci);
        $aa->plano_estudo()->associate($pi);
        $aa->save();

        $ab = new Aluno();
        $ab->numero_aluno = 20210102;
        $ab->nome = "Lúcifer Estrela da Manhã";
        $ab->matricula = 3;
        $ab->desistente = 0;
        $ab->concluiu_curso = 0;
        $ab->curso()->associate($ci);
        $ab->plano_estudo()->associate($pi);
        $ab->save();

        $ac = new Aluno();
        $ac->numero_aluno = 20210103;
        $ac->nome = "Luís";
        $ac->matricula = 1;
        $ac->desistente = 0;
        $ac->concluiu_curso = 0;
        $ac->curso()->associate($ci);
        $ac->plano_estudo()->associate($pi);
        $ac->save();

        $ad = new Aluno();
        $ad->numero_aluno = 20210101;
        $ad->nome = "Mário";
        $ad->matricula = 2;
        $ad->desistente = 0;
        $ad->concluiu_curso = 0;
        $ad->curso()->associate($cm);
        $ad->plano_estudo()->associate($pm);
        $ad->save();

        $ae = new Aluno();
        $ae->numero_aluno = 20210102;
        $ae->nome = "Luciano Estrela da Noite";
        $ae->matricula = 1;
        $ae->desistente = 0;
        $ae->concluiu_curso = 0;
        $ae->curso()->associate($cm);
        $ae->plano_estudo()->associate($pm);
        $ae->save();

        $af = new Aluno();
        $af->numero_aluno = 20210103;
        $af->nome = "Gaspar";
        $af->matricula = 1;
        $af->desistente = 0;
        $af->concluiu_curso = 0;
        $af->curso()->associate($cm);
        $af->plano_estudo()->associate($pm);
        $af->save();

        $ag = new Aluno();
        $ag->numero_aluno = 20210103;
        $ag->nome = "Freud";
        $ag->matricula = 1;
        $ag->desistente = 1;
        $ag->concluiu_curso = 0;
        $ag->curso()->associate($cm);
        $ag->plano_estudo()->associate($pm);
        $ag->save();
    }

    public static function createMockAssociativeData()
    {
        $aa = Aluno::find(1);
        $ab = Aluno::find(2);
        $ac = Aluno::find(3);
        $ad = Aluno::find(4);
        $ae = Aluno::find(5);
        $af = Aluno::find(6);
        $ag = Aluno::find(7);

        $da = Disciplina::find(1);
        $db = Disciplina::find(2);
        $dc = Disciplina::find(3);
        $dd = Disciplina::find(4);
        $de = Disciplina::find(5);
        $df = Disciplina::find(6);
        $dg = Disciplina::find(7);

        $aa->disciplinas()->attach($da);
        $aa->disciplinas()->attach($db);
        $aa->disciplinas()->attach($dc);
        $aa->disciplinas()->attach($dg);

        $ab->disciplinas()->attach($da);
        $ab->disciplinas()->attach($db);
        $ab->disciplinas()->attach($dc);
        $ab->disciplinas()->attach($dg);


        $ac->disciplinas()->attach($da);
        $ac->disciplinas()->attach($db);
        $ac->disciplinas()->attach($dc);
        $ac->disciplinas()->attach($dg);

        $ad->disciplinas()->attach($dd);
        $ad->disciplinas()->attach($de);
        $ad->disciplinas()->attach($df);

        $ae->disciplinas()->attach($dd);
        $ae->disciplinas()->attach($de);
        $ae->disciplinas()->attach($df);

        $af->disciplinas()->attach($dd);
        $af->disciplinas()->attach($de);
        $af->disciplinas()->attach($df);

        $ag->disciplinas()->attach($dd);
        $ag->disciplinas()->attach($de);
        $ag->disciplinas()->attach($df);
        $ag->disciplinas()->attach($dg);

    }
}
