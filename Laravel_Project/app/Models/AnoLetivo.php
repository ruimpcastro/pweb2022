<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnoLetivo extends Model
{
    use HasFactory;

    public function disciplina()
    {
        return $this->hasOne(Disciplina::class);
    }

    public function curso()
    {
        return $this->hasOne(Curso::class);
    }

    public static function createMockData()
    {
        $y = new AnoLetivo();
        $y->ano = 2021;
        $y->save();
    }
}
