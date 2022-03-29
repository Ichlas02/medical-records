<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Datamedis>
 */
class DatamedisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'pasien' => $this->faker->name(),
            'dokter' => $this->faker->name(),
            'kondisi' => collect($this->faker->paragraphs
            (mt_rand(5,10)))
            ->map(fn($p) =>"<p>$p</p>")
            ->implode(''),
            'suhu' => mt_rand(35,45.5),
            'pasien_id' => mt_rand(1,5)
        ];
    }
}
