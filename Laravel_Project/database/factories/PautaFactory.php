<?php

namespace Database\Factories;

use App\Models\Aluno;
use App\Models\Avaliacao;
use App\Models\Disciplina;
use App\Models\Pauta;
use Illuminate\Database\Eloquent\Factories\Factory;

class PautaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Pauta::class;

    public function definition()
    {
        return [
            'aluno_id' => Aluno::factory(),
            'avaliacao_id' => Avaliacao::factory(),
            'codigo' => $this->faker->numerify(),
            'dirty' => $this->faker->boolean(),
        ];
    }
}
