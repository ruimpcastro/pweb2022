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
        /*INFORMÀTICA*/
        /*1º Semestre                 nao usei "de" */
        /*1º ANO*/
        $da = new Disciplina();
        $da->codigo = 112;
        $da->designacao = "Introdução à Programação";
        $da->semestre = 1;
        $da->ano = 1;
        $da->plano = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut diam quam nulla porttitor massa id neque.";
        $da->save();
        $a = AnoLetivo::find(1);
        $da->ano_letivo()->attach($a);

        $db = new Disciplina();
        $db->codigo = 159;
        $db->designacao = "Cálculo I";
        $db->semestre = 1;
        $db->ano = 1;
        $db->plano = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut diam quam nulla porttitor massa id neque.";
        $db->save();
        $a = AnoLetivo::find(1);
        $db->ano_letivo()->attach($a);

        $dc = new Disciplina();
        $dc->codigo = 160;
        $dc->designacao = "Redes de Computadores";
        $dc->semestre = 1;
        $dc->ano = 1;
        $dc->plano = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut diam quam nulla porttitor massa id neque.";
        $dc->save();
        $a = AnoLetivo::find(1);
        $dc->ano_letivo()->attach($a);

        /*INFORMÀTICA*/
        /*1 Semestre*/
        /*2º ANO*/
        $dd = new Disciplina();
        $dd->codigo = 911;
        $dd->designacao = "Sistemas de Informação";
        $dd->semestre = 1;
        $dd->ano = 2;
        $dd->plano = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
        $dd->save();
        $a = AnoLetivo::find(1);
        $dd->ano_letivo()->attach($a);

        $df = new Disciplina();
        $df->codigo = 333;
        $df->designacao = "Probabilidade e Estatistica";
        $df->semestre = 1;
        $df->ano = 2;
        $df->plano = "Pretium vulputate sapien nec sagittis aliquam malesuada.";
        $df->save();
        $a = AnoLetivo::find(1);
        $df->ano_letivo()->attach($a);

        $dg = new Disciplina();
        $dg->codigo = 161;
        $dg->designacao = "Sistemas Operativos";
        $dg->semestre = 1;
        $dg->ano = 2;
        $dg->plano = "Pretium vulputate sapien nec sagittis aliquam malesuada.";
        $dg->save();
        $a = AnoLetivo::find(1);
        $dg->ano_letivo()->attach($a);

        /*INFORMÀTICA*/
        /*1 Semestre*/
        /*3º ANO*/
        $dh = new Disciplina();
        $dh->codigo = 550;
        $dh->designacao = "Programação Web";
        $dh->semestre = 1;
        $dh->ano = 3;
        $dh->plano = "Lorem ipsum dolor sit amet.";
        $dh->save();
        $a = AnoLetivo::find(1);
        $dh->ano_letivo()->attach($a);

        $di = new Disciplina();
        $di->codigo = 162;
        $di->designacao = "Engenharia de Software";
        $di->semestre = 1;
        $di->ano = 3;
        $di->plano = "Lorem ipsum dolor sit amet.";
        $di->save();
        $a = AnoLetivo::find(1);
        $di->ano_letivo()->attach($a);

        $dj = new Disciplina();
        $dj->codigo = 163;
        $dj->designacao = "Inteligência Artificial";
        $dj->semestre = 1;
        $dj->ano = 3;
        $dj->plano = "Lorem ipsum dolor sit amet.";
        $dj->save();
        $a = AnoLetivo::find(1);
        $dj->ano_letivo()->attach($a);

        /*INFORMÀTICA*/
        /*2 Semestre*/
        /*1º ANO*/
        $dk = new Disciplina();
        $dk->codigo = 888;
        $dk->designacao = "Cálculo II";
        $dk->semestre = 2;
        $dk->ano = 1;
        $dk->plano = "Lorem ipsum dolor sit amet.";
        $dk->save();
        $a = AnoLetivo::find(1);
        $dk->ano_letivo()->attach($a);

        $dl = new Disciplina();
        $dl->codigo = 755;
        $dl->designacao = "Multimédia";
        $dl->semestre = 2;
        $dl->ano = 1;
        $dl->plano = "Lorem ipsum dolor sit amet.";
        $dl->save();
        $a = AnoLetivo::find(1);
        $dl->ano_letivo()->attach($a);

        $dm = new Disciplina();
        $dm->codigo = 557;
        $dm->designacao = "Arquitetura de Computadores";
        $dm->semestre = 2;
        $dm->ano = 1;
        $dm->plano = "Lorem ipsum dolor sit amet.";
        $dm->save();
        $a = AnoLetivo::find(1);
        $dm->ano_letivo()->attach($a);

        /*INFORMÀTICA*/
        /*2 Semestre*/
        /*2º ANO*/
        $dn = new Disciplina();
        $dn->codigo = 333;
        $dn->designacao = "Computação Gráfica";
        $dn->semestre = 2;
        $dn->ano = 2;
        $dn->plano = "Lorem ipsum dolor sit amet.";
        $dn->save();
        $a = AnoLetivo::find(1);
        $dn->ano_letivo()->attach($a);

        $do = new Disciplina();
        $do->codigo = 330;
        $do->designacao = "Sistemas Distribuidos";
        $do->semestre = 2;
        $do->ano = 2;
        $do->plano = "Lorem ipsum dolor sit amet.";
        $do->save();
        $a = AnoLetivo::find(1);
        $do->ano_letivo()->attach($a);

        $dp = new Disciplina();
        $dp->codigo = 331;
        $dp->designacao = "tecnologias Web";
        $dp->semestre = 2;
        $dp->ano = 2;
        $dp->plano = "Lorem ipsum dolor sit amet.";
        $dp->save();
        $a = AnoLetivo::find(1);
        $dp->ano_letivo()->attach($a);

        /*INFORMÀTICA*/
        /*2 Semestre*/
        /*3º ANO*/
        $dq = new Disciplina();
        $dq->codigo = 002;
        $dq->designacao = "Programação Web";
        $dq->semestre = 2;
        $dq->ano = 3;
        $dq->plano = "Lorem ipsum dolor sit amet.";
        $dq->save();
        $a = AnoLetivo::find(1);
        $dq->ano_letivo()->attach($a);

        $dr = new Disciplina();
        $dr->codigo = 020;
        $dr->designacao = "Seminário em TIC";
        $dr->semestre = 2;
        $dr->ano = 3;
        $dr->plano = "Lorem ipsum dolor sit amet.";
        $dr->save();
        $a = AnoLetivo::find(1);
        $dr->ano_letivo()->attach($a);

        $dt = new Disciplina();
        $dt->codigo = 022;
        $dt->designacao = "Estágio";
        $dt->semestre = 2;
        $dt->ano = 3;
        $dt->plano = "Lorem ipsum dolor sit amet.";
        $dt->save();
        $a = AnoLetivo::find(1);
        $dt->ano_letivo()->attach($a);

        /*--------------------------------------------------------------------------------------------*/

        /*MEDICINA*/
        /*1º SEMESTRE*/
        /*1º ANO*/

        /*MEDICINA*/
        /*1 SEMESTRE*/
        /*2 ANO*/

        /*MEDICINA*/
        /*1 SEMESTRE*/
        /*3 ANO*/
        $d1 = new Disciplina();
        $d1->codigo = 234;
        $d1->designacao = "Anatomia";
        $d1->semestre = 1;
        $d1->ano = 3;
        $d1->plano = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
        $d1->save();
        $a = AnoLetivo::find(1);
        $d1->ano_letivo()->attach($a);

        /*MEDICINA*/
        /*2º SEMESTRE*/
        /*1º ANO*/
        $d = new Disciplina();
        $d->codigo = 400;
        $d->designacao = "Bio-Quimica";
        $d->semestre = 2;
        $d->ano = 1;
        $d->plano = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pretium vulputate sapien nec sagittis aliquam malesuada.";
        $d->save();
        $a = AnoLetivo::find(1);
        $d->ano_letivo()->attach($a);

        /*MEDICINA*/
        /*2º SEMESTRE*/
        /*2º ANO*/
        $d = new Disciplina();
        $d->codigo = 123;
        $d->designacao = "Fisiologia";
        $d->semestre = 2;
        $d->ano = 2;
        $d->plano = "Lorem ipsum.";
        $d->save();
        $a = AnoLetivo::find(1);
        $d->ano_letivo()->attach($a);

        /*MEDICINA*/
        /*2º SEMESTRE*/
        /*3º ANO*/

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
        $dd->plano_estudo()->attach($pi);

        $df = Disciplina::find(5);
        $df->plano_estudo()->attach($pi);

        $dg = Disciplina::find(6);
        $dg->plano_estudo()->attach($pm);
        $dg->plano_estudo()->attach($pi);

        $dh = Disciplina::find(7);
        $dh->plano_estudo()->attach($pi);
        $di = Disciplina::find(8);
        $di->plano_estudo()->attach($pi);
        $dj = Disciplina::find(9);
        $dj->plano_estudo()->attach($pi);
        $dl = Disciplina::find(10);
        $dl->plano_estudo()->attach($pi);
        $dm = Disciplina::find(11);
        $dm->plano_estudo()->attach($pi);

        $dn = Disciplina::find(12);
        $dn->plano_estudo()->attach($pi);
        $do = Disciplina::find(13);
        $do->plano_estudo()->attach($pi);
        $dp = Disciplina::find(14);
        $dp->plano_estudo()->attach($pi);
        $dq = Disciplina::find(15);
        $dq->plano_estudo()->attach($pi);
        $dr = Disciplina::find(16);
        $dr->plano_estudo()->attach($pi);
        $dt = Disciplina::find(17);
        $dt->plano_estudo()->attach($pi);

    }
}
