<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Poli>
 */
class PoliFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->unique()->randomElement(['Umum', 'Gigi', 'Kandungan', 'Anak']),
            'biaya' => $this->faker->unique()->randomElement(['Rp. 500.000', 'Rp. 1.000.000', 'Rp. 750.000', 'Rp. 1.250.000']),
            'keterangan' => $this->faker->sentence(),          
        ];
    }
}
