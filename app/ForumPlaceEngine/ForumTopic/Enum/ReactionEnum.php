<?php

namespace App\ForumPlaceEngine\ForumTopic\Enum;

enum ReactionEnum: string
{
    case Like    = 'like';
    case Love    = 'love';
    case Dislike = 'dislike';
    case Happy   = 'happy';
    case Funny   = 'funny';
    case Wow     = 'wow';
    case Angry   = 'angry';
    case Sad     = 'sad';
}
