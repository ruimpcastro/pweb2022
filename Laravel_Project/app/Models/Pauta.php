<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pauta extends Model
{
    use HasFactory;

    public function cursos()
    {
        return $this->hasMany(Curso::class);
    }

    public function displina()
    {
        return $this->hasOne(Disciplina::class);
    }

    public function availacao()
    {
        return $this->hasOne(Avaliacao::class);
    }

    public function aluno()
    {
        return $this->hasMany(Aluno::class);
    }
}
