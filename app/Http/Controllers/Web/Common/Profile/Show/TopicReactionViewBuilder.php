<?php

namespace App\Http\Controllers\Web\Common\Profile\Show;

use App\ForumPlaceEngine\ForumTopic\Repository\ForumTopicReactionRepositoryInterface;
use App\Http\Controllers\Web\Common\Profile\Show\Dto\TopicReactionData;
use App\Models\ForumTopic;
use App\Models\ForumTopicReaction;

class TopicReactionViewBuilder
{
    public function __construct(
        private readonly ForumTopicReactionRepositoryInterface $forumTopicReactionRepository
    )
    {}

    /**
     * @param ForumTopic $forumTopic
     * @return TopicReactionData[]
     */
    public function build(ForumTopic $forumTopic): array
    {
        /** @var ForumTopicReaction[] $forumTopicReactions */
        $forumTopicReactions = $this->forumTopicReactionRepository->getByForumTopic($forumTopic);
        /** @var TopicReactionData[] $mapper */
        $mapper              = [];

        foreach ($forumTopicReactions as $forumTopicReaction) {
            if (!isset($mapper[$forumTopicReaction->reaction])) {
                $mapper[$forumTopicReaction->reaction] = (new TopicReactionData())
                    ->setReactionName(ucfirst($forumTopicReaction->reaction))
                    ->setReactionPath($this->buildReactionPath($forumTopicReaction->reaction))
                    ->addUserName($forumTopicReaction->user->name);
            } else {
                $mapper[$forumTopicReaction->reaction]->addUserName($forumTopicReaction->user->name);
            }
        }

        return array_values($mapper);
    }

    private function buildReactionPath(string $reaction): string
    {
        return sprintf('/img/reaction/%s.png', $reaction);
    }
}
