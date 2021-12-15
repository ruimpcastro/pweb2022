<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultado extends Model
{
    use HasFactory;

    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }

    public function pauta()
    {
        return $this->belongsTo(Pauta::class);
    }

    public function disciplina()
    {
        return $this->belongsTo(Disciplina::class);
    }
}
