<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lte>
 */
class LteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'lteordertype' => 'New LTE Static IP',
            'vendor' => 'Verizon',
            'iptype' => 'Static',
            'pnsip' => $this->faker->e164PhoneNumber(),
            'devicetype' => $this->faker->e164PhoneNumber(),
            'deviceid' => $this->faker->e164PhoneNumber(),
            'areacode' => '609',
            'simid' => $this->faker->e164PhoneNumber(),
            'opco' => 'Cooper',
            'street' => $this->faker->streetAddress(),
            'city' => $this->faker->city(),
            'state' => $this->faker->state(),
            'zip' => $this->faker->postcode(),
            'customerdiv' => $this->faker->name(),
            'mobilenumber' => $this->faker->phoneNumber(),
        ];
    }
}
