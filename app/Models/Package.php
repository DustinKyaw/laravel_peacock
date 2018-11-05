<?php
/**
 * Created by PhpStorm.
 * User: zwemunhtun
 * Date: 11/4/18
 * Time: 3:38 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table= "packages";
    protected $fillable =['id', 'title', 'description', 'route', 'amount', 'start_date', 'end_date'];


}