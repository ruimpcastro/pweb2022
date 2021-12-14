<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;

    public function plano_estudo()
    {
        return $this->belongsToMany(PlanoEstudo::class);
    }

    public function ano_letivo()
    {
        return $this->hasMany(AnoLetivo::class);
    }

    public function createMockData()
    {
        $da = new Disciplina();
        $da->codigo = 112;
        $da->designacao = "Programação Web";
        $da->semestre = 1;
        $da->plano = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut diam quam nulla porttitor massa id neque.";
        $da->save();
        $da = Disciplina::find(1);

        $db = new Disciplina();
        $db->codigo = 911;
        $db->designacao = "PCO";
        $db->semestre = 1;
        $db->plano = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.";
        $db->save();
        $db = Disciplina::find(2);

        $dc = new Disciplina();
        $dc->codigo = 666;
        $dc->designacao = "Estruturas e Algoritmos";
        $dc->semestre = 2;
        $dc->plano = "Lorem ipsum dolor sit amet.";
        $dc->save();
        $dc = Disciplina::find(3);

        $dd = new Disciplina();
        $dd->codigo = 123;
        $dd->designacao = "Fisiologia";
        $dd->semestre = 2;
        $dd->plano = "Lorem ipsum.";
        $dd->save();
        $dd = Disciplina::find(4);

        $de = new Disciplina();
        $de->codigo = 400;
        $de->designacao = "Bio-Quimica";
        $de->semestre = 2;
        $de->plano = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Pretium vulputate sapien nec sagittis aliquam malesuada.";
        $de->save();
        $de = Disciplina::find(5);

        $df = new Disciplina();
        $df->codigo = 234;
        $df->designacao = "Anatomia";
        $df->semestre = 1;
        $df->plano = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";
        $df->save();
        $df = Disciplina::find(6);

        $dg = new Disciplina();
        $dg->codigo = 333;
        $dg->designacao = "Probabilidade e Estatistica";
        $dg->semestre = 1;
        $dg->plano = "Pretium vulputate sapien nec sagittis aliquam malesuada.";
        $dg->save();
        $dg = Disciplina::find(7);
    }
}
