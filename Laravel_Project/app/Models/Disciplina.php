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

    public function avaliacao()
    {
        return $this->hasMany(Avaliacao::class);
    }

    public function plano_estudos()
    {
        return $this->hasOne(Plano_Estudo::class);
    }
}
