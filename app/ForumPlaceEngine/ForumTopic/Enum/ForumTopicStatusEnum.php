<?php

namespace App\ForumPlaceEngine\ForumTopic\Enum;

enum ForumTopicStatusEnum: int
{
    case Draft     = 1;
    case Published = 2;
    case Pinned    = 200;
    case Private   = 201;
    case Archived  = 3;
    case Banned    = 4;

    public static function getStatusesWithOpenVisibility(): array
    {
        return [
            self::Published->value,
            self::Pinned->value,
        ];
    }

    public static function getStatusesOnlyForCreator(): array
    {
        return [
            self::Draft->value,
            self::Archived->value,
        ];
    }
}
