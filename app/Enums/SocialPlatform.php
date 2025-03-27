<?php

namespace App\Enums;

enum SocialPlatform: string
{
    case FACEBOOK = 'facebook';
    case TWITTER = 'twitter';
    case LINKEDIN = 'linkedin';
    case INSTAGRAM = 'instagram';
    case GITHUB = 'github';
    case GITLAB = 'gitlab';
    case YOUTUBE = 'youtube';

    public static function isValid(string $value): bool
    {
        return in_array($value, self::all(), true);
    }

    public static function all(): array
    {
        return array_column(self::cases(), 'value');
    }
}
