<?php

namespace App\Services\Threads;

use App\Models\MessageThread;
use App\Repositories\MessageThreadParticipantRepository;
use App\Repositories\MessageThreadRepository;
use Illuminate\Support\Facades\DB;

class CreateThreadService
{
    /**
     * @var MessageThreadRepository
     */
    private MessageThreadRepository $messageThreadRepository;
    /**
     * @var MessageThreadParticipantRepository
     */
    private MessageThreadParticipantRepository $messageThreadParticipantRepository;

    public function __construct(MessageThreadRepository $messageThreadRepository, MessageThreadParticipantRepository $messageThreadParticipantRepository)
    {
        $this->messageThreadRepository = $messageThreadRepository;
        $this->messageThreadParticipantRepository = $messageThreadParticipantRepository;
    }

    public function __invoke(array $participants, ?string $title = null): MessageThread
    {
        debugbar()->log('Calling CreateThreadService...');

        $thread = null;

        DB::transaction(function () use ($participants, $title, &$thread) {

            debugbar()->log('Creating the thread...');
            /** @var MessageThread $thread */
            $thread = $this->messageThreadRepository->create([
                'title' => $title,
            ]);

            foreach ($participants as $participant) {
                debugbar()->log('Creating Participant with uuid', $participant->getKey());
                $this->messageThreadParticipantRepository->create([
                    'thread_id' => $thread->getKey(),
                    'user_id' => $participant,
                ]);
            }

            return $thread;
        });

        return $thread;
    }
}
