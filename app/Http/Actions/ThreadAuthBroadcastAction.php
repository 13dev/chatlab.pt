<?php

namespace App\Http\Actions;

use App\Models\Thread;

class ThreadAuthBroadcastAction
{
    public function __invoke($user, $threadId)
    {
        $thread = Thread::find($threadId);

        if ($thread !== null) {
            $result = $thread->participants
                ->contains('user_id', $user->getKey());

            logs()->info('Broadcast result: ' . $result);

            return $result;
        }

        logs()->error('Thread not found broadcast: ' . $thread);

        return false;
    }
}
