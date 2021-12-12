<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plano_Estudo extends Model
{
    use HasFactory;

    public function curso()
    {
        return $this->hasMany(Curso::class);
    }

    public function disciplina()
    {
        return $this->hasMany(Disciplina::class);
    }
}
