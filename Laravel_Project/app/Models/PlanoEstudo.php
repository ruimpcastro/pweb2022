<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanoEstudo extends Model
{
    use HasFactory;

    public function disciplinas()
    {
        return $this->belongsToMany(Disciplina::class);
    }

    public static function createMockData(int $n)
    {
        $p = new PlanoEstudo();
        $c = Curso::find($n);
        $c->plano_estudo()->save($p);
        $c->save();
    }
}
