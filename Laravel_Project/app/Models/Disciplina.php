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

    //public function createMockData()
    //{
        //$da = new Disciplina();
        //$da->codigo = 112;
        //$da->designacao = "Programação Web";
        //$da->semestre = 1;
        //$da->save()
        //$da = Disciplina::find(1);
        //$pi->disciplinas()->save($da);

        //$db = new Disciplina();
        //$db->codigo = 911;
        //$db->designacao = "Programação Centrada a Objetos";
        //$db->semestre = 1;
        //$db->save()
        //$db = Disciplina::find(2);
        //$pi->disciplinas()->save($db);

        //$dc = new Disciplina();
        //$dc->codigo = 666;
        //$dc->designacao = "Estruturas e Algoritmos";
        //$dc->semestre = 2;
        //$dc->save()
        //$dc = Disciplina::find(3);
        //$pi->disciplinas()->save($dc);

        //$dd = new Disciplina();
        //$dd->codigo = 123;
        //$dd->designacao = "Fisiologia";
        //$dd->semestre = 2;
        //$dd->save()
        //$dd = Disciplina::find(4);
        //$pm->disciplinas()->save($dd);


    //$df = new Disciplina();
        //$de->codigo = 234;
        //$de->designacao = "Bio-Quimica";
        //$de->semestre = 2;
        //$de->save()
        //$de = Disciplina::find(5);
        //$pm->disciplinas()->save($de);

        //$df = new Disciplina();
        //$df->codigo = 234;
        //$df->designacao = "Anatomia";
        //$df->semestre = 1;
        //$df->save()
        //$pm->disciplinas()->save($df);

        //$dg = new Disciplina();
        //$dg->codigo = 333;
        //$dg->designacao = "Probabilidade e Estatistica";
        //$dg->semestre = 1;
        //$dg->save()
        //$pm->disciplinas()->save($dg);
    //}
}
