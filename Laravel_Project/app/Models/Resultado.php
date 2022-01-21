<?php

namespace App\Models;

use App\Domain\ResultadoHandler;
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
        $c = Curso::find(1);
        $r->pauta()->associate($p);
        $c->pauta()->save($p);
        $r->save();
        $r->aluno()->attach($a);

        $r = new Resultado();
        $r->resultado = "6.66";
        $a = Aluno::find(2);
        $p = Pauta::find(1);
        $c = Curso::find(1);
        $r->pauta()->associate($p);
        $c->pauta()->save($p);
        $r->save();
        $r->aluno()->attach($a);

        $r = new Resultado();
        $r->resultado = "9.5";
        $a = Aluno::find(3);
        $p = Pauta::find(1);
        $c = Curso::find(1);
        $r->pauta()->associate($p);
        $c->pauta()->save($p);
        $r->save();
        $r->aluno()->attach($a);

        $r = new Resultado();
        $r->resultado = "F";
        $a = Aluno::find(4);
        $p = Pauta::find(1);
        $c = Curso::find(1);
        $r->pauta()->associate($p);
        $c->pauta()->save($p);
        $r->save();
        $r->aluno()->attach($a);

        $r = new Resultado();
        $r->resultado = "F";
        $a = Aluno::find(5);
        $p = Pauta::find(2);
        $c = Curso::find(2);
        $r->pauta()->associate($p);
        $c->pauta()->save($p);
        $r->save();
        $r->aluno()->attach($a);

        $r = new Resultado();
        $r->resultado = "12.1";
        $a = Aluno::find(6);
        $p = Pauta::find(2);
        $c = Curso::find(2);
        $r->pauta()->associate($p);
        $c->pauta()->save($p);
        $r->save();
        $r->aluno()->attach($a);

        $r = new Resultado();
        $r->resultado = "15";
        $a = Aluno::find(7);
        $p = Pauta::find(2);
        $c = Curso::find(2);
        $r->pauta()->associate($p);
        $c->pauta()->save($p);
        $r->save();
        $r->aluno()->attach($a);

        $r = new Resultado();
        $r->resultado = "7";
        $a = Aluno::find(1);
        $p = Pauta::find(3);
        $c = Curso::find(1);
        $r->pauta()->associate($p);
        $c->pauta()->save($p);
        $r->save();
        $r->aluno()->attach($a);

        $r = new Resultado();
        $r->resultado = "6.66";
        $a = Aluno::find(2);
        $p = Pauta::find(3);
        $c = Curso::find(1);
        $r->pauta()->associate($p);
        $c->pauta()->save($p);
        $r->save();
        $r->aluno()->attach($a);

        $r = new Resultado();
        $r->resultado = "16";
        $a = Aluno::find(3);
        $p = Pauta::find(3);
        $c = Curso::find(1);
        $r->pauta()->associate($p);
        $c->pauta()->save($p);
        $r->save();
        $r->aluno()->attach($a);

        $r = new Resultado();
        $r->resultado = "16";
        $a = Aluno::find(4);
        $p = Pauta::find(3);
        $c = Curso::find(1);
        $r->pauta()->associate($p);
        $c->pauta()->save($p);
        $r->save();
        $r->aluno()->attach($a);

        $r = new Resultado();
        $r->resultado = "2";
        $a = Aluno::find(5);
        $p = Pauta::find(4);
        $c = Curso::find(2);
        $r->pauta()->associate($p);
        $c->pauta()->save($p);
        $r->save();
        $r->aluno()->attach($a);

        $r = new Resultado();
        $r->resultado = "10";
        $a = Aluno::find(6);
        $p = Pauta::find(4);
        $c = Curso::find(2);
        $r->pauta()->associate($p);
        $c->pauta()->save($p);
        $r->save();
        $r->aluno()->attach($a);

        $r = new Resultado();
        $r->resultado = "9";
        $a = Aluno::find(7);
        $p = Pauta::find(4);
        $c = Curso::find(2);
        $r->pauta()->associate($p);
        $c->pauta()->save($p);
        $r->save();
        $r->aluno()->attach($a);

        $r = new Resultado();
        $r->resultado = "20";
        $a = Aluno::find(12);
        $p = Pauta::find(1);
        $c = Curso::find(1);
        $r->pauta()->associate($p);
        $c->pauta()->save($p);
        $r->save();
        $r->aluno()->attach($a);

        $r = new Resultado();
        $r->resultado = "F";
        $a = Aluno::find(13);
        $p = Pauta::find(4);
        $c = Curso::find(1);
        $r->pauta()->associate($p);
        $c->pauta()->save($p);
        $r->save();
        $r->aluno()->attach($a);

        $r = new Resultado();
        $r->resultado = "F";
        $a = Aluno::find(14);
        $p = Pauta::find(4);
        $c = Curso::find(1);
        $r->pauta()->associate($p);
        $c->pauta()->save($p);
        $r->save();
        $r->aluno()->attach($a);

        $r = new Resultado();
        $r->resultado = "9";
        $a = Aluno::find(15);
        $p = Pauta::find(4);
        $c = Curso::find(1);
        $r->pauta()->associate($p);
        $c->pauta()->save($p);
        $r->save();
        $r->aluno()->attach($a);

        $r = new Resultado();
        $r->resultado = "15";
        $a = Aluno::find(16);
        $p = Pauta::find(4);
        $c = Curso::find(1);
        $r->pauta()->associate($p);
        $c->pauta()->save($p);
        $r->save();
        $r->aluno()->attach($a);



        $r = new ResultadoHandler();
        $r::getMedia(1);
        $r::getMedia(2);
        $r::getMedia(3);
        $r::getMedia(4);
    }
}
