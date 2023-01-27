<?php

namespace App\Controllers;

use App\Config;
use App\Models\User;
use App\View\View;

/**
 * [Description AuthController]
 */
class AuthController
{

    /**
     * Check User status
     * @return [type]
     */
    public static function isAdmin()
    {
        return isset($_SESSION['admin']) ? True : False;
    }

    /**
     * LogIn
     * 
     * @return [type]
     */
    public static function login()
    {
        $login = $_REQUEST['login'];
        $password = $_REQUEST['password'];
        $user = User::getUser($login);
        $errors = [];
        if (!$user) {
            $errors[] = "User not found";
        } else {
            if (($login != $user['login']) or (md5($password) != $user['password'])) {
                $errors[] = "Login or password incorrect";
            }
        }
        if (!empty($errors)) {
            View::render('login', [
                'errors' => $errors

            ]);
        } else {
            $_SESSION['admin'] = True;
            header("Location:  / ");
        }
    }

    /**
     * Logout
     */
    public static function logout()
    {
        unset($_SESSION['admin']);
        header("Location:  / ");
    }


}
