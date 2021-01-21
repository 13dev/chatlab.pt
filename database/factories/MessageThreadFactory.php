<?php

namespace Database\Factories;

use App\Models\MessageThread;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessageThreadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MessageThread::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->uuid,
            'title' => $this->faker->sentence
        ];
    }
}
