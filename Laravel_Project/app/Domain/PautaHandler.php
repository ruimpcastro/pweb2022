<?php

namespace App\Domain;

use App\Models\Pauta;
use Illuminate\Database\Eloquent\Collection;

class PautaHandler
{
    /*
     * CRIAR PARTE DE GERAR PAUTA ATRAVÉS DO CSV
     */

    public static function gerarPauta()
    {
        $rh = new ResultadoHandler();
        return $rh::gerarPauta();
    }

    public static function criarPautas(int $codDisciplina)
    {
        $rh = new ResultadoHandler();
        return $rh::criarPautas($codDisciplina);
    }

    public static function getPauta(int $chavePauta): Pauta
    {
        $resultadoHandler = new ResultadoHandler();
        return $resultadoHandler::getPauta($chavePauta);
    }

    public static function getPautas(): Collection
    {
        $resultadoHandler = new ResultadoHandler();
        return $resultadoHandler::getPautas();
    }

    public static function getResultados(int $chavePauta)
    {
        $resultadoHandler = new ResultadoHandler();
        return $resultadoHandler::getResultados($chavePauta);
    }

    public static function makeDirty(int $chavePauta): int
    {
        $resultadoHandler = new ResultadoHandler();
        return $resultadoHandler::makeDirty($chavePauta);
    }

    public static function getMedia(int $chavePauta)
    {
        $rh = new ResultadoHandler();
        return $rh::getMedia();
    }
}
