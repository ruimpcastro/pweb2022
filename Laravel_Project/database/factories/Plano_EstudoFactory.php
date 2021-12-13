<?php

namespace Database\Factories;

use App\Models\Curso;
use App\Models\Disciplina;
use App\Models\Plano_Estudo;
use Illuminate\Database\Eloquent\Factories\Factory;

class Plano_EstudoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Plano_Estudo::class;

    public function definition()
    {
        return [
            'curso_id' => Curso::factory(),
            'disciplina_id' => Disciplina::factory(),
        ];
    }
}
