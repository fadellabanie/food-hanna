<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'position' => $this->faker->jobTitle(),
            'description_nl' => $this->faker->sentence(1),
            'description_en' => $this->faker->sentence(1),
            'image' => $this->faker->imageUrl(),

        ];
    }
}
