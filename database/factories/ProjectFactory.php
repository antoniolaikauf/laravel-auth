<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nome' => fake() -> word(),
            // 'img' => fake() -> imageUrl(360, 360, 'animals', true, 'dogs', true, 'jpg'),
            'descrizione' => fake() -> paragraph(),
            'data_progetto' => fake() -> date(),
        ];
    }
}
