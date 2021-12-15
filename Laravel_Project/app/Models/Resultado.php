<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    use HasFactory;

    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }

    public function pauta()
    {
        return $this->belongsTo(Pauta::class);
    }

    public function disciplina()
    {
        return $this->belongsTo(Disciplina::class);
    }

    public function createMockData()
    {
        $r = new Resultado();
        $r->avaliacao = 16.5;
        $r->presenca = 1;

        $d = Disciplina::find(2);
        $a = Aluno::find(1);
        $p = Pauta::find(1);

        $r->disciplina()->associate($d);
        $r->aluno()->associate($a);
        $r->pauta()->associate($p);
        $r->save();


        $r = new Resultado();
        $r->avaliacao = 6.66;
        $r->presenca = 1;

        $d = Disciplina::find(2);
        $a = Aluno::find(2);
        $p = Pauta::find(1);

        $r->disciplina()->associate($d);
        $r->aluno()->associate($a);
        $r->pauta()->associate($p);
        $r->save();


        $r = new Resultado();
        $r->avaliacao = 11.2;
        $r->presenca = 1;

        $d = Disciplina::find(2);
        $a = Aluno::find(3);
        $p = Pauta::find(1);

        $r->disciplina()->associate($d);
        $r->aluno()->associate($a);
        $r->pauta()->associate($p);
        $r->save();


        $r = new Resultado();
        $r->avaliacao = 7.2;
        $r->presenca = 1;

        $d = Disciplina::find(2);
        $a = Aluno::find(4);
        $p = Pauta::find(1);

        $r->disciplina()->associate($d);
        $r->aluno()->associate($a);
        $r->pauta()->associate($p);
        $r->save();


        $r = new Resultado();
        $r->avaliacao = 0;
        $r->presenca = 0;

        $d = Disciplina::find(2);
        $a = Aluno::find(1);
        $p = Pauta::find(1);

        $r->disciplina()->associate($d);
        $r->aluno()->associate($a);
        $r->pauta()->associate($p);
        $r->save();
    }
}
