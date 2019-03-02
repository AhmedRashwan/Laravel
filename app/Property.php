<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
   protected $fillable = ["type","price","mainDescription","description","features","place","videoUrl","comments"];

}
