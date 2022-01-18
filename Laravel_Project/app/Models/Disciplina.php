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
        //CHANGE TO BELONGS TO MANY
        return $this->belongsToMany(AnoLetivo::class);
    }

    public function alunos()
    {
        return $this->belongsToMany(Aluno::class);
    }

    public function resultado()
    {
        return $this->hasMany(Resultado::class);
    }

    public static function createMockData()
    {
        $da = new Disciplina();
        $da->codigo = 112;
        $da->designacao = "Programação 101";
        $da->semestre = 1;
        $da->ano = 1;
        $da->plano = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut diam quam nulla porttitor massa id neque.";
        $da->save();
        $a = AnoLetivo::find(1);
        $da->ano_letivo()->attach($a);

        $db = new Disciplina();
        $db->codigo = 911;
        $db->designacao = "PCO";
        $db->semestre = 1;
        $db->ano = 2;
        $db->plano = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
        $db->save();
        $a = AnoLetivo::find(1);
        $db->ano_letivo()->attach($a);

        $dc = new Disciplina();
        $dc->codigo = 666;
        $dc->designacao = "Estruturas e Algoritmos";
        $dc->semestre = 2;
        $dc->ano = 3;
        $dc->plano = "Lorem ipsum dolor sit amet.";
        $dc->save();
        $a = AnoLetivo::find(1);
        $dc->ano_letivo()->attach($a);


        $dd = new Disciplina();
        $dd->codigo = 123;
        $dd->designacao = "Fisiologia";
        $dd->semestre = 2;
        $dd->ano = 2;
        $dd->plano = "Lorem ipsum.";
        $dd->save();
        $a = AnoLetivo::find(1);
        $dd->ano_letivo()->attach($a);

        $de = new Disciplina();
        $de->codigo = 400;
        $de->designacao = "Bio-Quimica";
        $de->semestre = 2;
        $de->ano = 1;
        $de->plano = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pretium vulputate sapien nec sagittis aliquam malesuada.";
        $de->save();
        $a = AnoLetivo::find(1);
        $de->ano_letivo()->attach($a);

        $df = new Disciplina();
        $df->codigo = 234;
        $df->designacao = "Anatomia";
        $df->semestre = 1;
        $df->ano = 3;
        $df->plano = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
        $df->save();
        $a = AnoLetivo::find(1);
        $df->ano_letivo()->attach($a);

        $dg = new Disciplina();
        $dg->codigo = 333;
        $dg->designacao = "Probabilidade e Estatistica";
        $dg->semestre = 1;
        $dg->ano = 2;
        $dg->plano = "Pretium vulputate sapien nec sagittis aliquam malesuada.";
        $dg->save();
        $a = AnoLetivo::find(1);
        $dg->ano_letivo()->attach($a);

        $dh = new Disciplina();
        $dh->codigo = 550;
        $dh->designacao = "Programação Web";
        $dh->semestre = 1;
        $dh->ano = 3;
        $dh->plano = "Lorem ipsum dolor sit amet.";
        $dh->save();
        $a = AnoLetivo::find(1);
        $dh->ano_letivo()->attach($a);
    }

    public static function createMockAssociativeData()
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
