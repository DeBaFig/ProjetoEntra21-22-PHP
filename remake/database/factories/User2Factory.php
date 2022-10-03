<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User2;

class User2Factory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User2::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'email_verified_at' => $this->faker->dateTime(),
            'password' => $this->faker->password,
            'ddd_phone' => $this->faker->numberBetween(-10000, 10000),
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->regexify('[A-Za-z0-9]{150}'),
            'cep' => $this->faker->word,
            'cpf' => $this->faker->word,
            'facebook' => $this->faker->word,
            'instagram' => $this->faker->word,
            'avatar' => $this->faker->word,
            'isAtive' => $this->faker->numberBetween(-8, 8),
        ];
    }
}
