<?php

namespace App\Services\Threads;

use App\Models\Thread;
use App\Repositories\ParticipantRepository;
use App\Repositories\ThreadRepository;
use Illuminate\Support\Facades\DB;

class CreateThreadService
{
    /**
     * @var ThreadRepository
     */
    private ThreadRepository $messageThreadRepository;
    /**
     * @var ParticipantRepository
     */
    private ParticipantRepository $messageThreadParticipantRepository;

    public function __construct(ThreadRepository $messageThreadRepository, ParticipantRepository $messageThreadParticipantRepository)
    {
        $this->messageThreadRepository = $messageThreadRepository;
        $this->messageThreadParticipantRepository = $messageThreadParticipantRepository;
    }

    public function __invoke(array $participants, string $description, string $title): Thread
    {
        debugbar()->log('Calling CreateThreadService...');

        $thread = null;

        DB::transaction(function () use ($participants, $title, $description, &$thread) {
            debugbar()->log('Creating the thread...');
            /** @var Thread $thread */
            $thread = $this->messageThreadRepository->create([
                'title' => $title,
                'description' => $description,
            ]);
            foreach ($participants as $participant) {
                debugbar()->log('Creating Participant with uuid', $participant);
                $this->messageThreadParticipantRepository->create([
                    'thread_id' => $thread->getKey(),
                    'user_id' => $participant,
                ]);
            }
        });

        return $thread;
    }
}
