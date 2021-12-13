<?php

namespace Database\Factories;

use App\Models\Aluno;
use App\Models\Disciplina;
use App\Models\Matricula;
use Illuminate\Database\Eloquent\Factories\Factory;

class MatriculaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Matricula::class;

    public function definition()
    {
        return [
            'disciplina_id' => Disciplina::factory(),
            'aluno_id' => Aluno::factory(),
            'num_matriculas' => $this->faker->numberBetween(1,10),
        ];
    }
}
