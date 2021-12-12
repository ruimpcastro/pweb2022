<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    use HasFactory;

    public function disciplina()
    {
        return $this->hasOne(Disciplina::class);
    }

    public function alunos()
    {
        return $this->hasMany(Aluno::class);
    }
}
