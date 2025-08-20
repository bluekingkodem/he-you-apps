<?php

namespace App;

enum RoleEnum:string
{
    case ADMIN = 'admin';
    case REALTO = 'realto';
    case CLIENT = 'client';
}
