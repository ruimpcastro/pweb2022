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
