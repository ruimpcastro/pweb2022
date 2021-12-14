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
        //$pi->disciplinas()->save($da);

        //$db = new Disciplina();
        //$db->codigo = 911;
        //$db->designacao = "Programação Centrada a Objetos";
        //$db->semestre = 1;
        //$pi->disciplinas()->save($db);

        //$dc = new Disciplina();
        //$dc->codigo = 666;
        //$dc->designacao = "Estruturas e Algoritmos";
        //$dc->semestre = 2;
        //$pi->disciplinas()->save($dc);

        //$dd = new Disciplina();
        //$dd->codigo = 123;
        //$dd->designacao = "Fisiologia";
        //$dd->semestre = 2;
        //$pm->disciplinas()->save($dd);


    //$df = new Disciplina();
        //$df->codigo = 234;
        //$df->designacao = "Bio-Quimica";
        //$df->semestre = 2;
        //$pm->disciplinas()->save($df);

        //$dg = new Disciplina();
        //$dg->codigo = 234;
        //$dg->designacao = "Anatomia";
        //$dg->semestre = 1;
        //$pm->disciplinas()->save($dg);

        //$dh = new Disciplina();
        //$dh->codigo = 333;
        //$dh->designacao = "Probabilidade e Estatistica";
        //$dh->semestre = 1;
        //$pm->disciplinas()->save($dh);
    //}
}
