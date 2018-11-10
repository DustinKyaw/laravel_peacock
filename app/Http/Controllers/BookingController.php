<?php
/**
 * Created by PhpStorm.
 * User: zwemunhtun
 * Date: 11/9/18
 * Time: 8:14 PM
 */

namespace App\Http\Controllers;


use App\ServiceModels\BookingModel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class BookingController
{
    function __construct()
    {
        $this->booking= new BookingModel();
    }

    function book(){
        $data = Input::get();
        $res = $this->booking->book_package($data);
        if ($res){
            Session::flash('book_msg', "Booking Successful");
            return Redirect::back();
        }
    }

}