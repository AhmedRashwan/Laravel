<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class properties extends Model
{

    public $lastProps = array(["link" => "http://www.google.com",
        "price" => "$30000",
        "mainDescription" => "TEST",
        "description" => "TEST description",
        "features" => ['4 Bedroom',
            '3 Baths',
            'Kitchen',
            'Air Condition',
            'Balcony']
        , "type" => "Foor Sale",
        "data" => "new Place in new Gerry",
        "place" => "new Gersy"]);
    public function __construct(array $attributes = [])
    {
        return $this->lastProps;
    }
    function getLastProps(){
        return $this->lastProps;
    }

}
