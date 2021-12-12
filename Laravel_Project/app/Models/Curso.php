<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    public function faculadade()
    {
        return $this->hasOne(Faculdade::class);
    }

    public function pautas()
    {
        return $this->hasMany(Pauta::class);
    }

    public function plano_estudo()
    {
        return $this->hasOne(Plano_Estudo::class);
    }

    public function alunos()
    {
        return $this->hasMany(Aluno::class);
    }
}
