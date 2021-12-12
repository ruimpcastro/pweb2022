<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    use HasFactory;

    public function pautas()
    {
        return $this->hasMany(Pauta::class);
    }

    public function avaliacoes()
    {
        return $this->hasMany(Avaliacao::class);
    }

    public function planos_estudo()
    {
        return $this->hasMany(Plano_Estudo::class);
    }

    public function anos_letivos()
    {
        return $this->hasMany(Ano_Letivo::class);
    }

    public function matriculas()
    {

    }
}
