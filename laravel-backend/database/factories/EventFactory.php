<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Event::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->eventTitle,
            'dia' => $this->faker->numberBetween(1,30),
            'description' => $this->faker->text(200),
        ];
    }
}
