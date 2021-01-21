<?php

namespace Database\Seeders;

use App\Models\Message;
use App\Models\MessageThread;
use App\Models\User;
use Illuminate\Database\Seeder;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Message::factory()->count(10)->create();

    }
}
