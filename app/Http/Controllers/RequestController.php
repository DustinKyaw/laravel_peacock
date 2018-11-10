<?php
/**
 * Created by PhpStorm.
 * User: zwemunhtun
 * Date: 11/10/18
 * Time: 11:48 AM
 */

namespace App\Http\Controllers;


use App\ServiceModels\RequestModel;
use Illuminate\Support\Facades\Input;

class RequestController
{

    function __construct()
    {
        $this->request = new RequestModel();
    }


    function request(){
        return view('layouts/user/request_custom');
    }


    function create(){
        $data = Input::get();
        $res = $this->request->create_custom($data);
        if ($res){
            return redirect()->back()->with('custom_message', 'Request Successfully');
        }

    }

}