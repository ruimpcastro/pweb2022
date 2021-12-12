<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ano_Letivo extends Model
{
    use HasFactory;

    public function aluno()
    {
        return $this->hasOne(Aluno::class);
    }
}
