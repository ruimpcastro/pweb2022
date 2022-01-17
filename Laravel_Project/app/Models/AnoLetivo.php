<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnoLetivo extends Model
{
    use HasFactory;

    public function disciplina()
    {
        //CHANGE TO BELONGS TO MANY
        return $this->belongsToMany(Disciplina::class);
    }

    public function curso()
    {
        //CHANGE TO BELONGS TO MANY
        return $this->belongsToMany(Curso::class);
    }

    public function aluno()
    {
        return $this->belongsToMany(Aluno::class);
    }

    public static function createMockData()
    {
        $y = new AnoLetivo();
        $y->ano = 2021;
        $y->save();
    }
}
