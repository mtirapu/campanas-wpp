<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Funnel>
 */
class FunnelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            
            'user_id' => 1,

            'funnel_nombre' => $this->faker->sentence(),

            'funnel_fecha_registro' => $this->faker->date()

        ];
    }
}
