<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pemain>
 */
class PemainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_pemain'=>$this->faker->sentence(),
            'no_punggung' => $this->faker->unique()->numberBetween(1, 99),
            'posisi' => $this->faker->randomElement([
                'Penyerang',
                'Gelandang',
                'Bek',
                'Bek Tengah',
                'Kiper',
            ]),
        ];
    }
}

