<?php
/**
 * Created by PhpStorm.
 * User: zwemunhtun
 * Date: 11/5/18
 * Time: 9:41 PM
 */

namespace App\Http\Controllers;

use App\ServiceModels\ServiceModel;
use Illuminate\Support\Facades\Input;

class ServiceController
{

    function __construct()
    {
        $this->service = new ServiceModel();
    }

    function index(){
        $data['services'] = $this->service->get_services();
        return view('layouts/admin/service_list')->with($data);
    }

    function create(){
        $data = Input::get();

        $res = $this->service->create_service($data);

        if ($res){
            return redirect()->back();
        }
    }

    function update(){
        $data = Input::get();
        $res = $this->service->update_service($data);

        if ($res){
            return redirect()->back();
        }
    }


}