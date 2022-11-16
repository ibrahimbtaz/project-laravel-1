<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_kelas' => mt_rand(1,5),
            'nama' => $this->faker->sentence(mt_rand(1,3)),
            'nis' => $this->faker->sentence(mt_rand(1)),
            'alamat' => $this->faker->sentence(mt_rand(2,5)),
        ];
    }
}
