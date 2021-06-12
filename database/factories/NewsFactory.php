<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title_en' => $this->faker->sentence(),
            'title_nl' => $this->faker->sentence(),
            'description_nl' => $this->faker->paragraph(),
            'description_en' => $this->faker->paragraph(),
            'image' => $this->faker->imageUrl(),

        ];
    }
}
