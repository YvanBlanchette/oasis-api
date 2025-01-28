<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class StaffFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $firstName = fake()->firstName();
        $lastName = fake()->lastName();

        $displayName = $firstName . ' ' . $lastName;
        return [
            'displayName' => $displayName,
            'email' => $firstName . $lastName . '@mail.com',
            'password' => static::$password ??= Hash::make('password'),
            'phone' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'photoURL' => 'https://randomuser.me/api/portraits/' . $this->faker->randomElement(['men', 'women']) . '/' . $this->faker->randomNumber(2) . '.jpg',
            'role' => 'staff',
            'status' => rand() % 2 ? 'active' : 'inactive',
            'hireDate' => now(),

            'remember_token' => Str::random(10),
        ];
    }
}
