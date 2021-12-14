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
}
