<?php

namespace App\ForumPlaceEngine\ForumTopic\Action;

use App\ForumPlaceEngine\Common\ApplicationException;
use App\ForumPlaceEngine\ForumTopic\Contract\ForumTopicSetReactionDataInterface;
use App\ForumPlaceEngine\ForumTopic\Enum\ReactionEnum;
use App\ForumPlaceEngine\ForumTopic\Repository\ForumTopicReactionRepositoryInterface;
use App\ForumPlaceEngine\ForumTopic\Repository\ForumTopicRepositoryInterface;
use App\ForumPlaceEngine\User\Repository\UserRepositoryInterface;
use App\Models\ForumTopicReaction;

class ForumTopicSetReactionAction
{
    public function __construct(
        private readonly ForumTopicRepositoryInterface         $forumTopicRepository,
        private readonly ForumTopicReactionRepositoryInterface $forumTopicReactionRepository,
        private readonly UserRepositoryInterface               $userRepository
    )
    {}

    /**
     * @throws ApplicationException
     */
    public function run(ForumTopicSetReactionDataInterface $data): void
    {
        $forumTopic = $this->forumTopicRepository->getById($data->getForumTopicId());
        if (is_null($forumTopic)) {
            throw new ApplicationException('Топик не найден');
        }

        $user = $this->userRepository->getById($data->getUserId());
        if (is_null($user)) {
            throw new ApplicationException('Пользователь не найден');
        }

        $forumTopicReaction = $this->forumTopicReactionRepository->getByForumTopicAndUser($forumTopic, $user);
        if (!is_null($forumTopicReaction)) {
            throw new ApplicationException('Реакция уже поставлена');
        }

        if (!in_array($data->getReactionType(), array_column(ReactionEnum::cases(), 'value'))) {
            throw new ApplicationException('Реакция не найдена');
        }

        $forumTopicReaction                 = new ForumTopicReaction();
        $forumTopicReaction->reaction       = $data->getReactionType();
        $forumTopicReaction->forum_topic_id = $forumTopic->id;
        $forumTopicReaction->user_id        = $user->id;

        $forumTopicReaction->save();
    }
}
