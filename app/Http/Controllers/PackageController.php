<?php
/**
 * Created by PhpStorm.
 * User: zwemunhtun
 * Date: 11/4/18
 * Time: 3:38 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServiceModels\PackageModel;
use App\ServiceModels\ServiceModel;
use Illuminate\Support\Facades\Input;

class PackageController
{
    function __construct()
    {
        $this->package = new PackageModel();
        $this->service = new ServiceModel();
    }

    function select_packages(){
        $res['package']= $this->package->get_packages();
        return view('layouts/user/package_view')->with($res);
    }

    function show_package($id){
        $data['service']= $this->service->get_services();
        $data['package'] = $this->package->search_by_id($id);
        if ($data['package']){
            return view('layouts/user/package_detail_view')->with($data);
        }
    }

    function index(){
        $res['package']= $this->package->get_packages();
        $res['service']= $this->service->get_services();
        return view('layouts/admin/packages')->with($res);
    }

    function create(){
        $data = Input::get();
        //dd($data);
        $res = $this->package->create_package($data);
        if ($res){
            return redirect()->back();
        }

    }


    function delete($id){
        $res = $this->package->delete_package($id);
        if ($res){
            return redirect()->back();
        }
    }

    function display($id){
        $data['service']= $this->service->get_services();
        $data['package'] = $this->package->search_by_id($id);
        if ($data['package']){
            return view('layouts/admin/package_details')->with($data);
        }
    }

    function edit($id){
        $data = Input::get();
        $data['id'] = $id;
        $res = $this->package->edit_package($data);
        if ($res){
            return redirect('user/packages');
        }
    }


}