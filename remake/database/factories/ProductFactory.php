<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Product;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->text,
            'address' => $this->faker->regexify('[A-Za-z0-9]{150}'),
            'reference_link' => $this->faker->word,
            'min_price' => $this->faker->numberBetween(-10000, 10000),
            'max_price' => $this->faker->numberBetween(-10000, 10000),
            'publish_at' => $this->faker->dateTime(),
            'quantity' => $this->faker->numberBetween(-10000, 10000),
            'isNew' => $this->faker->numberBetween(-8, 8),
            'isNegotiable' => $this->faker->numberBetween(-8, 8),
            'isActive' => $this->faker->numberBetween(-8, 8),
        ];
    }
}
