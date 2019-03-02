<?php

namespace App\Http\Controllers;

use App\property;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
//use App\Property;
class propertyController extends Controller
{
    public function addProperty(Request $request)
    {
        try{
            $property = new Property();
            $property->type = "For Sale";
            $property->price = "2000";
            $property->mainDescription="test main Description";
            $property->description = "test description";
            $property->features = "test features";
            $property->place = "test place";
            $property->videoUrl = "http://www.google.com";
            $property->comments = "comments";
            $property->save();
            return view("layouts.pages.index");
        }catch (\Exception $ex){
            var_dump("EXCEPTION".$ex);

        }

    }

    public function getAllProperty()
    {
        try{
            $allProps = Property::all();
            return view("layouts.pages.index",["lastProps"=>$allProps]);
        }catch (\Exception $ex){
            var_dump("EXCEPTION".$ex);

        }

    }

    public function getPropertyDetails($id){
        $propDetails = Property::find($id);
        $propDetails['features'] = explode(",",$propDetails['features']);
        return view("layouts.pages.properties-detail",["Property"=>$propDetails]);
    }
}
