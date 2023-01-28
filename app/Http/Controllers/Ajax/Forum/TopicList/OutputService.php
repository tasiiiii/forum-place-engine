<?php

namespace App\Http\Controllers\Ajax\Forum\TopicList;

use App\Http\Controllers\Web\Forum\Category\ForumTopicViewBuilder;
use App\Models\ForumTopic;
use JetBrains\PhpStorm\ArrayShape;

class OutputService
{
    public function __construct(
        private readonly ForumTopicViewBuilder $forumTopicViewBuilder
    )
    {}

    #[ArrayShape(['title' => "string", 'creator' => "string", 'created' => "string", 'last_activity' => "array"])]
    public function build(ForumTopic $forumTopic): array
    {
        $forumTopic = $this->forumTopicViewBuilder->build($forumTopic);

        $data = [
            'title'         => $forumTopic->getTitle(),
            'creator'       => $forumTopic->getCreator(),
            'created'       => $forumTopic->getCreatedAt(),
            'last_activity' => [],
        ];

        if ($forumTopic->getActivityViewData()) {
            $data['last_activity'] = [
                'username'   => $forumTopic->getActivityViewData()->getUsername(),
                'avatar'     => $forumTopic->getActivityViewData()->getAvatar(),
                'created_at' => $forumTopic->getActivityViewData()->getCreatedAt(),
            ];
        }

        return $data;
    }
}
