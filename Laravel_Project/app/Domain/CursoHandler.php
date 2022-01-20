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

    public static function editCurso(int $codigo, string $newDesignacao)
    {
        $ofertaLetiva = new OfertaLetiva();
        return $ofertaLetiva::editCurso($codigo, $newDesignacao);
    }

    public static function getCurso(int $codigo)
    {
        $ofertaLetiva = new OfertaLetiva();
        return $ofertaLetiva::getCurso($codigo);
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

    public static function getAlunosDesistentes()
    {
        $ol = new OfertaLetiva();
        return $ol::getAlunosDesistentes();
    }

    public static function getAlunosFinalistas()
    {
        $ol = new OfertaLetiva();
        return $ol::getAlunosFinalistas();
    }
}

