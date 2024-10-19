<?php

namespace App\Services\Manager;

use App\Models\Message;
use App\Models\Ticket;

class TicketService
{

    public function getUnreadMessagesCount(int $userId): int
    {
        return Message::whereHas('ticket', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->where('user_id', '!=', $userId)->where('is_read', 0)->count();
    }




}
