<?php
/**
 * Created by PhpStorm.
 * User: zwemunhtun
 * Date: 11/9/18
 * Time: 8:15 PM
 */

namespace App\ServiceModels;


use App\Models\Booking;

class BookingModel
{

    function book_package($data){
        $booking = new Booking();
        $booking->name = $data['name'];
        $booking->phno = $data['phno'];
        $booking->address = $data['address'];
        $booking->package_id = $data['package_id'];
        return $booking->save();
    }

}