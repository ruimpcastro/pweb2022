<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    public function pauta()
    {
        return $this->hasOne(Pauta::class);
    }

    public function curso()
    {
        return $this->hasOne(Curso::class);
    }

    public function availacoes ()
    {
        return $this->hasMany(Avaliacao::class);
    }


    public function plano_estudo()
    {
        return $this->hasOne(Plano_Estudo::class);
    }

    public function anos_letivos()
    {
        return $this->hasMany(Ano_Letivo::class);
    }

    public function matriculas()
    {
        return $this->hasMany(Matricula::class);
    }

}
