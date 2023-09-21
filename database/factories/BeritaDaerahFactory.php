<?php

namespace Database\Factories;

use App\Models\BeritaDaerah;
use Illuminate\Database\Eloquent\Factories\Factory;

class BeritaDaerahFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BeritaDaerah::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'daerah_id' => $this->faker->word,
        'judul' => $this->faker->word,
        'foto' => $this->faker->word,
        'berita' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
