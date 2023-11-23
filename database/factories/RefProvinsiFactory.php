<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RefProvinsi>
 */
class RefProvinsiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_tahun_akreditasi'   => fake()->numberBetween(1,2),
            'nama'          => fake()->name(),
            'slug'          => fake()->name(),
            'kuota'         => fake()->numberBetween(100,6000),
            'alamat'        => fake()->address(),
            'ketua'         => fake()->name(),
        ];
    }
}
