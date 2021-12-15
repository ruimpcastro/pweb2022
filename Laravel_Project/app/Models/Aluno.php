<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    public function plano_estudo()
    {
        return $this->belongsTo(PlanoEstudo::class);
    }

    public function disciplinas()
    {
        return $this->belongsToMany(Disciplina::class);
    }

    public function createMockData()
    {
        //
    }
}
