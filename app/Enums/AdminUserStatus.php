<?php

namespace App\Enums;

enum AdminUserStatus: string
{
    case Active = 'active';
    case Invited = 'invited';
    case Suspended = 'suspended';
}
