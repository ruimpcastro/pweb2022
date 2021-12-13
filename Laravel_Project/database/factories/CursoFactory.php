<?php

namespace Database\Factories;

use App\Models\Aluno;
use App\Models\Curso;
use App\Models\Pauta;
use App\Models\Plano_Estudo;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Curso::class;


    public function definition()
    {
        return [
            'aluno_id' => Aluno::factory(),
            'plano_estudo_id' => Plano_Estudo::factory(),
            'pauta_id' => Pauta::factory(),
            'codigo' => $this->faker->unique()->numerify(),
            'designacao' => 'FCT',
        ];
    }
}
