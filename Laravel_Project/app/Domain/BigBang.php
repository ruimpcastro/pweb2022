<?php

namespace App\Domain;

use App\Models\Aluno;
use App\Models\AnoLetivo;
use App\Models\Curso;
use App\Models\Disciplina;
use App\Models\Pauta;
use App\Models\PlanoEstudo;

class BigBang
{
    public static function createAllThings()
    {
        //Generates every data for the DB
        $c = new Curso();
        $c->createMockData();

        $p = new PlanoEstudo();
        $p->createMockData(1);
        $p->createMockData(2);

        $a= new AnoLetivo();
        $a->createMockData();

        $d = new Disciplina();
        $d->createMockData();
        $d->createMockAssociativeData();

        $a = new Aluno();
        $a->createMockData();
        $a->createMockAssociativeData();

        $p = new Pauta();
        $p->createMockData();
    }
}
