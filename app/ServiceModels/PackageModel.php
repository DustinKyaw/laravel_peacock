<?php
/**
 * Created by PhpStorm.
 * User: zwemunhtun
 * Date: 11/4/18
 * Time: 3:38 PM
 */

namespace App\ServiceModels;


use App\Models\Package;

class PackageModel
{
    function create_package($data){
        //dd($data);
        $package = new Package();
        $package->id = bin2hex(random_bytes(16));
        $package->title = $data['title'];
        $package->description = $data['desc'];
        $package->route = $data['routes'];
        $package->amount = $data['amount'];
        $package->start_date = $data['start_date'];
        $package->end_date = $data['end_date'];
        return $package->save();
    }

    function get_packages(){
        $data = Package::get()->toArray();
        return $data;
    }

    function get_packages_count(){
        $data = Package::get()->count();
        return $data;
    }

}