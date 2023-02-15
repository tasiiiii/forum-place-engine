<?php

namespace App\Http\Requests\Web\Forum\Topic\Reaction\Remove;

use App\Http\Controllers\Ajax\Forum\Topic\Reaction\Remove\Dto\ForumTopicRemoveReactionData;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use JetBrains\PhpStorm\ArrayShape;

class Request extends FormRequest
{
    #[ArrayShape(['forum_topic_id' => "string"])]
    public function rules(): array
    {
        return [
            'forum_topic_id' => 'required',
        ];
    }

    public function getData()
    {
        /** @var User $user */
        $user = Auth::user();

        return (new ForumTopicRemoveReactionData())
            ->setUserId($user->id)
            ->setForumTopicId($this->get('forum_topic_id'));
    }
}
