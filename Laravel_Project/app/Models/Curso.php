<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    public function plano_estudo()
    {
        return $this->hasOne(PlanoEstudo::class);
    }

    public function bigBang()
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

    public function createMockData()
    {
        $c = new Curso();
        $c->codigo = 123;
        $c->designacao = "Informática";
        $c->save();

        $c = new Curso();
        $c->codigo = 321;
        $c->designacao = "Medicina";
        $c->save();
    }
}
