<?php

namespace App\Broadcasting;

use App\Models\Thread;
use App\Models\User;

class ThreadChannel
{

    /**
     * Authenticate the user's access to the channel.
     *
     * @param \App\Models\User $user
     * @return array|bool
     */
    public function join(User $user, $threadId)
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
