<?php
/**
 * Created by PhpStorm.
 * User: zwemunhtun
 * Date: 11/4/18
 * Time: 3:15 AM
 */

namespace App\Http\Controllers;


use App\ServiceModels\UserModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class UserController
{
    public function __construct()
    {
        $this->user = new UserModel();
    }

    function index(){
        return view('layouts/admin/login_view');
    }


    function login()
    {
        $email = Input::get('email');
        $password = Input::get('password');

        $res = $this->user->login($email, $password);
        //dd($res);
        if ($res) {
            $sess_arr = array('id' => $res->id, 'name' => $res->name, 'email' => $res->email, 'password' => $res->password, 'phone' => $res->phone, 'type'=>$res->type);
            Session::push('user', $sess_arr);
            return redirect('user/dashboard');
        }
    }

}