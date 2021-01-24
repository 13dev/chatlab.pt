<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->uuid('thread_id');
            $table->integer('participant_id')->unsigned();
            $table->text('body');
            $table->timestamp('created_at')->default(Carbon::now());

            $table->foreign('participant_id')->references('id')->on('message_thread_participants')->onDelete('cascade');
            $table->foreign('thread_id')->references('id')->on('message_threads')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
