<?php

namespace App\Model;

enum StarshipStatusEnum: string
{
    case WAITING = 'waiting';
    case COMPLETED = 'completed';
    case IN_PROGRESS = 'in progress';
}
