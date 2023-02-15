<?php

namespace App\Http\Controllers\Web\Common\Profile\Show;

use App\ForumPlaceEngine\ForumTopic\Repository\ForumTopicReactionRepositoryInterface;
use App\ForumPlaceEngine\ForumTopic\Repository\ForumTopicRepositoryInterface;
use App\Http\Controllers\Web\Common\Profile\Show\Dto\TopicViewData;
use App\Models\ForumTopic;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class TopicViewBuilder
{
    public function __construct(
        private readonly ForumTopicRepositoryInterface         $forumTopicRepository,
        private readonly ForumTopicReactionRepositoryInterface $forumTopicReactionRepository,
        private readonly TopicReactionViewBuilder              $topicReactionViewBuilder
    )
    {}

    public function build(ForumTopic $forumTopic): TopicViewData
    {
        /** @var User $user */
        $user     = Auth::user();
        $reaction = $this->forumTopicReactionRepository->getByForumTopicAndUser($forumTopic, $user);

        return (new TopicViewData())
            ->setId($forumTopic->id)
            ->setCreatorName($forumTopic->creator->name)
            ->setCreatorAvatar($forumTopic->creator->avatar)
            ->setShortContent($forumTopic->content)
            ->setTopicMessagesCounter($this->forumTopicRepository->countMessagesInTopic($forumTopic))
            ->setShareCounter(0)
            ->setCreatedAt($forumTopic->created_at->format('d.m.Y H:i:s'))
            ->setLiked(!is_null($reaction))
            ->setTopicReactions($this->topicReactionViewBuilder->build($forumTopic));
    }
}
