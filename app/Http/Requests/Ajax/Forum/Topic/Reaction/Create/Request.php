<?php

namespace App\Http\Requests\Ajax\Forum\Topic\Reaction\Create;

use App\Http\Controllers\Ajax\Forum\Topic\Reaction\Create\Dto\ForumTopicSetReactionData;
use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class Request extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['forum_topic_id' => "string", 'reaction' => "string"])]
    public function rules(): array
    {
        return [
            'forum_topic_id' => 'required',
            'reaction'       => 'required',
        ];
    }

    public function getData(): ForumTopicSetReactionData
    {
        return (new ForumTopicSetReactionData())
            ->setForumTopicId($this->get('forum_topic_id'))
            ->setReactionType($this->get('reaction'));
    }
}
