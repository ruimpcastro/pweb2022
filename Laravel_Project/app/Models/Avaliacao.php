<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    use HasFactory;

    public function pauta()
    {
        return $this->hasOne(Pauta::class);
    }

    public function disciplina()
    {
        return $this->hasOne(Disciplina::class);
    }

    public function aluno()
    {
        return $this->hasOne(Aluno::class);
    }
}
