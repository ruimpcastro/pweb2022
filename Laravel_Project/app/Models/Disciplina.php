<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;

    public function pauta()
    {
        return $this->hasMany(Pauta::class);
    }

    public function plano_estudo()
    {
        return $this->belongsToMany(PlanoEstudo::class);
    }

    public function ano_letivo()
    {
        return $this->belongsTo(AnoLetivo::class);
    }

    public function alunos()
    {
        return $this->belongsToMany(Aluno::class);
    }

    public function resultado()
    {
        return $this->hasMany(Resultado::class);
    }

    public function createMockData()
    {
        $da = new Disciplina();
        $da->codigo = 112;
        $da->designacao = "Programação Web";
        $da->semestre = 1;
        $da->plano = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut diam quam nulla porttitor massa id neque.";
        $a = AnoLetivo::find(1);
        $da->ano_letivo()->associate($a);
        $da->save();

        $db = new Disciplina();
        $db->codigo = 911;
        $db->designacao = "PCO";
        $db->semestre = 1;
        $db->plano = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
        $a = AnoLetivo::find(1);
        $db->ano_letivo()->associate($a);
        $db->save();

        $dc = new Disciplina();
        $dc->codigo = 666;
        $dc->designacao = "Estruturas e Algoritmos";
        $dc->semestre = 2;
        $dc->plano = "Lorem ipsum dolor sit amet.";
        $a = AnoLetivo::find(1);
        $dc->ano_letivo()->associate($a);
        $dc->save();

        $dd = new Disciplina();
        $dd->codigo = 123;
        $dd->designacao = "Fisiologia";
        $dd->semestre = 2;
        $dd->plano = "Lorem ipsum.";
        $a = AnoLetivo::find(1);
        $dd->ano_letivo()->associate($a);
        $dd->save();

        $de = new Disciplina();
        $de->codigo = 400;
        $de->designacao = "Bio-Quimica";
        $de->semestre = 2;
        $de->plano = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pretium vulputate sapien nec sagittis aliquam malesuada.";
        $a = AnoLetivo::find(1);
        $de->ano_letivo()->associate($a);
        $de->save();

        $df = new Disciplina();
        $df->codigo = 234;
        $df->designacao = "Anatomia";
        $df->semestre = 1;
        $df->plano = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
        $a = AnoLetivo::find(1);
        $df->ano_letivo()->associate($a);
        $df->save();

        $dg = new Disciplina();
        $dg->codigo = 333;
        $dg->designacao = "Probabilidade e Estatistica";
        $dg->semestre = 1;
        $dg->plano = "Pretium vulputate sapien nec sagittis aliquam malesuada.";
        $a = AnoLetivo::find(1);
        $dg->ano_letivo()->associate($a);
        $dg->save();
    }

    public function createMockAssociativeData()
    {
        $pi = PlanoEstudo::find(1);
        $pm = PlanoEstudo::find(2);

        $da = Disciplina::find(1);
        $da->plano_estudo()->attach($pi);
        $db = Disciplina::find(2);
        $db->plano_estudo()->attach($pi);
        $dc = Disciplina::find(3);
        $dc->plano_estudo()->attach($pi);
        $dd = Disciplina::find(4);
        $dd->plano_estudo()->attach($pm);
        $de = Disciplina::find(5);
        $de->plano_estudo()->attach($pm);
        $df = Disciplina::find(6);
        $df->plano_estudo()->attach($pm);
        $dg = Disciplina::find(7);
        $dg->plano_estudo()->attach($pm);
        $dg->plano_estudo()->attach($pi);



    }
}
