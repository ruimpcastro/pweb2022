<?php

namespace App\Domain;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Collection;


class CursoHandler
{

    public static function createCurso(int $codigo, string $designacao): Curso
    {
        $ofertaLetiva = new OfertaLetiva();
        return $ofertaLetiva::createCurso($codigo, $designacao);
    }

    public static function getCurso(int $id)
    {
        $ofertaLetiva = new OfertaLetiva();
        return $ofertaLetiva::getCurso($id);
    }

    public static function getCursos(): Collection
    {
        $ofertaLetiva = new OfertaLetiva();
        return $ofertaLetiva::getCursos();
    }

    public static function getMedia(int $codigo): float
    {
        $ofertaLetiva = new OfertaLetiva();
        return $ofertaLetiva::getMedia($codigo);
    }
}

