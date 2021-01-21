<?php

namespace Database\Factories;

use App\Models\MessageThread;
use App\Models\MessageThreadParticipant;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class MessageThreadParticipantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MessageThreadParticipant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'thread_id' => MessageThread::factory(),
            'user_id' => User::factory(),
            'last_read' => Carbon::now(),
        ];
    }
}
