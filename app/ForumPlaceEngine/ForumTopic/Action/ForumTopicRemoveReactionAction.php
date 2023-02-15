<?php

namespace App\ForumPlaceEngine\ForumTopic\Action;

use App\ForumPlaceEngine\Common\ApplicationException;
use App\ForumPlaceEngine\ForumTopic\Contract\ForumTopicRemoveReactionDataInterface;
use App\ForumPlaceEngine\ForumTopic\Repository\ForumTopicReactionRepositoryInterface;
use App\ForumPlaceEngine\ForumTopic\Repository\ForumTopicRepositoryInterface;
use App\ForumPlaceEngine\User\Repository\UserRepositoryInterface;

class ForumTopicRemoveReactionAction
{
    public function __construct(
        private readonly ForumTopicRepositoryInterface         $forumTopicRepository,
        private readonly UserRepositoryInterface               $userRepository,
        private readonly ForumTopicReactionRepositoryInterface $forumTopicReactionRepository
    )
    {}

    /**
     * @throws ApplicationException
     */
    public function run(ForumTopicRemoveReactionDataInterface $data): void
    {
        $forumTopic = $this->forumTopicRepository->getById($data->getForumTopicId());
        if (is_null($forumTopic)) {
            throw new ApplicationException('Топик не найден');
        }

        $user = $this->userRepository->getById($data->getUserId());
        if (is_null($user)) {
            throw new ApplicationException('Пользователь не найден');
        }

        $reaction = $this->forumTopicReactionRepository->getByForumTopicAndUser($forumTopic, $user);
        if (is_null($reaction)) {
            throw new ApplicationException('Реакция для данного топика не поставлена');
        }

        $reaction->delete();
    }
}
