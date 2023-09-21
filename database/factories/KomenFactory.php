<?php

namespace Database\Factories;

use App\Models\Komen;
use Illuminate\Database\Eloquent\Factories\Factory;

class KomenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Komen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'berita_id' => $this->faker->word,
        'nama' => $this->faker->word,
        'email' => $this->faker->word,
        'komen' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
