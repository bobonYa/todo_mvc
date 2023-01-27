<?php

namespace App\Models;

/**
 *  User
 */
class User
{
    public static function getUser($login)
    {
        $users['admin'] = ['login' => 'admin', 'password' => md5('123')];
        return isset($users[$login]) ? $users[$login] : False;
    }
}
