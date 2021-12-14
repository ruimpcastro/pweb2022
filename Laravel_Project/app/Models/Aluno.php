<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    public function ano_letivo()
    {
        return $this->hasMany(AnoLetivo::class);
    }

    public function plano_estudo()
    {
        return $this->hasOne(PlanoEstudo::class);
    }
}
