<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pasien>
 */
class PasienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nama' => $this->faker->name(),
            'tanggal_lahir' => $this->faker->date(),
            'jenis_kelamin_id' => $this->faker->numberBetween(1, 2), // Assuming
            'nomor_hape' => $this->faker->phoneNumber(),
        ];
    }
}
