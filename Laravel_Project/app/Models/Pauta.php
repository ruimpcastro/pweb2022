<?php

namespace App\Models;

use App\Domain\ResultadoHandler;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pauta extends Model
{
    use HasFactory;

    public function resultado()
    {
        return $this->hasMany(Resultado::class);
    }

    public static function createMockData()
    {
        $da = Disciplina::find(1);
        $db = Disciplina::find(2);
        $dc = Disciplina::find(3);
        $dd = Disciplina::find(4);
        $de = Disciplina::find(5);
        $df = Disciplina::find(6);
        $dg = Disciplina::find(7);
        $dh = Disciplina::find(8);

        $rh = new ResultadoHandler();
        $rh::criarPautas($da->codigo);
        $rh::criarPautas($db->codigo);
        $rh::criarPautas($dc->codigo);
        $rh::criarPautas($dd->codigo);
        $rh::criarPautas($de->codigo);
        $rh::criarPautas($df->codigo);
        $rh::criarPautas($dg->codigo);
        $rh::criarPautas($dh->codigo);
    }
}
