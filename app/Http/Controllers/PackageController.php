<?php
/**
 * Created by PhpStorm.
 * User: zwemunhtun
 * Date: 11/4/18
 * Time: 3:38 PM
 */

namespace App\Http\Controllers;


use App\ServiceModels\PackageModel;
use Illuminate\Support\Facades\Input;

class PackageController
{
    function __construct()
    {
        $this->package = new PackageModel();
    }

    function index(){
        $res['package']= $this->package->get_packages();
        return view('layouts/admin/packages')->with($res);
    }

    function create(){
        $data = Input::get();

        $res = $this->package->create_package($data);
        if ($res){
            return view('layouts/admin/packages', ['message' => 'Package Created']);
        }

    }



}