<?php

namespace Database\Factories;

use App\Models\Aluno;
use App\Models\Ano_Letivo;
use App\Models\Disciplina;
use App\Models\Pauta;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlunoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Aluno::class;
    public function definition()
    {
        return [
            'ano_letivo_id' => 1,
            'num_aluno' => $this->faker->unique()->numerify("###"),
            'nome' => $this->faker->name(),
            'matricula' => $this->faker->numberBetween(1,5),
            'desistente' => $this->faker->boolean(),
        ];
    }
}
