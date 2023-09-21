<?php

namespace Database\Factories;

use App\Models\KomenDaerah;
use Illuminate\Database\Eloquent\Factories\Factory;

class KomenDaerahFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = KomenDaerah::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'berita_daerah_id' => $this->faker->word,
        'nama' => $this->faker->word,
        'email' => $this->faker->word,
        'komen' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
