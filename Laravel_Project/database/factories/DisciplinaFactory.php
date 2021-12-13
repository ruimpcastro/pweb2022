<?php

namespace Database\Factories;

use App\Models\Ano_Letivo;
use App\Models\Disciplina;
use App\Models\Pauta;
use Illuminate\Database\Eloquent\Factories\Factory;

class DisciplinaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Disciplina::class;

    public function definition()
    {
        return [
            'pauta_id' => Pauta::factory(),
            'ano_letivo_id' => 2021,
            'codigo' => $this->faker->unique()->numerify(),
            'designacao' => 'Informatica',
            'semestre' => $this->faker->boolean(),
            'plano' => $this->faker->sentence(),
        ];
    }
}
