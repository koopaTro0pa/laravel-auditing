<?php
namespace Ensi\LaravelAuditing\Database\Factories;

use Ensi\LaravelAuditing\Tests\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/*
|--------------------------------------------------------------------------
| User Factories
|--------------------------------------------------------------------------
|
*/
class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'is_admin'   => $this->faker->randomElement([0, 1]),
            'first_name' => $this->faker->firstName,
            'last_name'  => $this->faker->lastName,
            'email'      => $this->faker->unique()->safeEmail,
        ];
    }
}
