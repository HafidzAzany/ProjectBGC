<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_mahasiswa' =>  fake()->name(),
            'nim' => fake()->unique()->numberBetween(int1: 1, int2: 100),
            'prodi' => fake()->randomElement(array: ['TI', 'SI']),
            'asal' => fake()->address(),
        ];
    }
}
