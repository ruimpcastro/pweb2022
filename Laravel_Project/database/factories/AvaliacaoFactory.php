<?php

namespace Database\Factories;

use App\Models\Ano_Letivo;
use App\Models\Avaliacao;
use App\Models\Disciplina;
use App\Models\Pauta;
use Illuminate\Database\Eloquent\Factories\Factory;

class AvaliacaoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Avaliacao::class;

    public function definition()
    {
        return [
            'disciplina_id' => Disciplina::factory(),
            'pauta_id' => Pauta::factory(),
            'ano_letivo_id' => 2021,
            'designacao' => "Epoca de frequencia",
            'classificacao_aluno' => $this->faker->randomFloat(null, 0, 20),
        ];
    }
}
