<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mensaje>
 */
class MensajeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'funnel_id' => 1,
            'mensaje_cuerpo' => $this->faker->text(100),
            'mensaje_dias_act' => $this->faker->randomDigitNotNull()
        ];
    }
}
