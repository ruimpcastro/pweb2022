<?php

use App\Models\Curso;
use App\Models\PlanoEstudo;

class CursoHandler
{
    public static function createCurso(int $codigo, string $designacao)
    {
        $c = new Curso();
        $c->codigo = $codigo;
        $c->designacao = $designacao;
        $c->save();
    }
}
