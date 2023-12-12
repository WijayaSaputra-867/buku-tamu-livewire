<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guest>
 */
class GuestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    private function getRandArray($data = []){
        $count_data = count($data) - 1;
        $result = $data[mt_rand(0, $count_data)];
        return $result;
    }
    public function definition(): array
    {
        $gender = $this->getRandArray(['Laki-laki', 'Perempuan']);
        return [
            'nama_tamu' => fake()->name(),
            'bertemu' => fake()->name(),
            'asal_instansi' => fake()->company(),
            'keperluan_tamu' => fake()->realTextBetween($minNbChars = 10, $maxNbChars = 20, $indexSize = 2),
            'telepon' => fake()->e164PhoneNumber(),
            'waktu_datang' => fake()->dateTimeBetween('-5 year', 'now')
        ];
    }
}
