<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    use HasFactory;

    public function pauta()
    {
        return $this->belongsTo(Pauta::class);
    }
    public function aluno()
    {
        return $this->belongsToMany(Aluno::class);
    }

    public static function createMockData()
    {
        $r = new Resultado();
        $r->resultado = "16.5";
        $a = Aluno::find(1);
        $p = Pauta::find(1);
        $r->pauta()->associate($p);
        $r->save();
        $r->aluno()->attach($a);

        $r = new Resultado();
        $r->resultado = "6.66";
        $a = Aluno::find(2);
        $r->pauta()->associate($p);
        $r->save();
        $r->aluno()->attach($a);

        $r = new Resultado();
        $r->resultado = "9.5";
        $a = Aluno::find(3);
        $p = Pauta::find(1);
        $r->pauta()->associate($p);
        $r->save();
        $r->aluno()->attach($a);

        $r = new Resultado();
        $r->resultado = "F";
        $a = Aluno::find(4);
        $p = Pauta::find(1);
        $r->pauta()->associate($p);
        $r->save();
        $r->aluno()->attach($a);

        $r = new Resultado();
        $r->resultado = "F";
        $a = Aluno::find(5);
        $p = Pauta::find(2);
        $r->pauta()->associate($p);
        $r->save();
        $r->aluno()->attach($a);

        $r = new Resultado();
        $r->resultado = "12.1";
        $a = Aluno::find(6);
        $r->pauta()->associate($p);
        $r->save();
        $r->aluno()->attach($a);

        $r = new Resultado();
        $r->resultado = "15";
        $a = Aluno::find(7);
        $p = Pauta::find(1);
        $r->pauta()->associate($p);
        $r->save();
        $r->aluno()->attach($a);


        /*
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
        */
    }
}
