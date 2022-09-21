<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Profile;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ddd_phone' => $this->faker->numberBetween(-10000, 10000),
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->regexify('[A-Za-z0-9]{100}'),
            'cep' => $this->faker->numberBetween(-10000, 10000),
            'email_verified_at' => $this->faker->dateTime(),
            'cpf' => $this->faker->numberBetween(-10000, 10000),
            'status' => $this->faker->boolean,
            'facebook' => $this->faker->word,
            'instagram' => $this->faker->word,
            'avatar' => $this->faker->word,
        ];
    }
}
