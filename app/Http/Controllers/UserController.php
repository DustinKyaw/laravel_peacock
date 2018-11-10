<?php
/**
 * Created by PhpStorm.
 * User: zwemunhtun
 * Date: 11/4/18
 * Time: 3:15 AM
 */

namespace App\Http\Controllers;

use App\ServiceModels\PackageModel;
use App\ServiceModels\UserModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class UserController
{
    public function __construct()
    {
        $this->user = new UserModel();
        $this->package = new PackageModel();
    }

    function home(){
        $data['package'] = $this->package->get_packages();

        return view('welcome')->with($data);
    }

    function index(){
        return view('layouts/admin/login_view');
    }

    function dashboard(){
        $data['package_count'] = $this->package->get_packages_count();
        return view('layouts/admin/dashboard')->with($data);
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

    function show(){
        $data['user'] = $this->user->get_all_user();
        return view('layouts/admin/admin_profile')->with($data);
    }

    function create(){
        $data = Input::get();

        $res = $this->user->create_user($data);
        if ($res){
            return redirect()->back();
        }
    }

    function edit(){
        $data = Input::get();

        $res = $this->user->edit_user($data);
        if ($res){
            return redirect('user/logout');
        }
    }

    function contact(){
        return view('layouts/user/contact');
    }



}