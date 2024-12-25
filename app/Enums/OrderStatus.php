<?php

namespace App\Enums;

enum OrderStatus: string
{
    case New = 'new';
    case InProgress = 'in_progress';
    case WaitingForSpareParts = 'waiting_for_spare_parts';
    case Completed = 'completed';
    case Canceled = 'canceled';
    case Overstayed = 'overstayed';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
