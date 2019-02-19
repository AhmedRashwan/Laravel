<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('layouts.pages.index');
})->name("Home");

Route::get('/Register', function () {
    return view('layouts.pages.register');
})->name("Register");

Route::get('/Login', function () {
    return view('layouts.pages.signin');
})->name("Login");


Route::get('/support', function () {
    return view('layouts.pages.contact');
})->name("support");


Route::get('/license', function () {
    return view('layouts.pages.index');
})->name("license");


Route::get('/FAQ', function () {
    return view('layouts.pages.index');
})->name("FAQ");


Route::get('/Privacy', function () {
    return view('layouts.pages.index');
})->name("Privacy");

Route::get('/Gallery', function () {
    return view('layouts.pages.gallery');
})->name("Gallery");

Route::group(["prefix"=>"Contact"],function(){

    Route::get('/', function () {
        return view('layouts.pages.contact');
    })->name("Contact");

    Route::post('/Create/{author?}/{email}/{subject}/{comment}/{submit}', function ($author) {
        return view('layouts.pages.contact');
    })->name("Contact.create");
});

Route::group(['prefix'=>'Properties'], function () {
    Route::get('/', function () {
        return view('layouts.pages.properties');
    })->name("Properties");

    Route::get('/Details/{id?}', function ($id=0) {
        $Property = ['price'=>'$3000',
            'mainDescription'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, alias!',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, alias!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, alias!',
            'features'=>['4 Bedroom',
                '3 Baths',
                'Kitchen',
                'Air Condition',
                'Belcony'],
            'videoUrl'=>'https://www.youtube.com/embed/CegXQps0In4'
        ];
        return view('layouts.pages.properties-detail',['Property'=>$Property]);
    })->name("Properties/Details");
});


Route::group(['prefix'=>'Blog'], function () {
    Route::get('/', function () {
        return view('layouts.pages.blog-archive');
    })->name("Blog");

    Route::get('/Details', function () {
        return view('layouts.pages.blog-single');
    })->name("Blog/Details");

});

Route::group(['prefix'=>'Error'], function () {
    Route::get('/', function () {
        return view('layouts.pages.404');
    })->name("Error");

    Route::get('/404', function () {
        return view('layouts.pages.404');
    })->name("Error/404");

});


Route::group(['prefix'=>'user'],function(){
    Route::post("/",function(\Illuminate\Http\Request $request){

        return redirect()->route('Login')->with('info',$request->input("email"));
    })->name("user.login");

});