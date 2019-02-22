<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Session\Store;
use App\properties;
class lastPropertiesController extends Controller
{
    public function getLastProperties(Store $store)
    {
        $store->remove("lastProps");
        if ($store->has("lastProps")) {
            return view('layouts.pages.index', ['lastProps' => $store->get("lastProps")]);
        } else {
            $lastProp = new properties();
            $store->put("lastProps", $lastProp->getLastProps());
            return view('layouts.pages.index', ['lastProps' => $store->get("lastProps")]);
        }
    }
}
