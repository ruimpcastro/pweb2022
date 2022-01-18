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

    public function anoLetivo()
    {
        //CHANGE TO BELONGS TO MANY
        return $this->belongsToMany(AnoLetivo::class);
    }

    public function pauta()
    {
        return $this->hasMany(Pauta::class);
    }

    public static function createMockData()
    {
        $a = AnoLetivo::find(1);

        $c = new Curso();
        $c->codigo = 123;
        $c->designacao = "Informática";
        $a->curso()->save($c);
        $c->save();

        $c = new Curso();
        $c->codigo = 321;
        $c->designacao = "Medicina";
        $a->curso()->save($c);
        $c->save();
    }

    public static function createMockAssociativeData()
    {
        $a = AnoLetivo::find(1);

        $ca = Curso::find(1);
        $ca->anoLetivo()->attach($a);
        $cb = Curso::find(2);
        $cb->anoLetivo()->attach($a);
    }
}
