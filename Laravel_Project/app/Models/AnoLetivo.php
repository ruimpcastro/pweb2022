<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnoLetivo extends Model
{
    use HasFactory;

    public function disciplinas()
    {
        return $this->hasOne(Disciplina::class);
    }

    public function createMockData()
    {
        $y = new AnoLetivo();
        $y->ano = 2021;
        $y->save();
    }
}
