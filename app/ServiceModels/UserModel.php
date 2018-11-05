<?php
/**
 * Created by PhpStorm.
 * User: zwemunhtun
 * Date: 11/4/18
 * Time: 3:16 AM
 */

namespace App\ServiceModels;


use App\Models\User;

class UserModel
{

    function login($email, $password){
        $password = sha1($password);
        $result = User::where('email', $email)->where('password', $password)->first();

        if (!empty($result)) {
            return $result;
        }else{
            return null;
        }
    }

}