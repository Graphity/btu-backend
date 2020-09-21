<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the 'web' middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;


Route::get('/', function () {
    return view('hi');
});

Route::get('/form', function() {
    return view('guest.form');
});

Route::post('/postmethod', function(Request $request) {
    $data = [
        "fname"=>$request->post()['fname'],
        "lname"=>$request->post()['lname'],
        "dob"=>$request->post()['dob'],
        "address"=>$request->post()['address'],
        "bio"=>$request->post()['bio']
    ];
    return view('guest.table', ['newdata'=>$data]);
})->name('posttest');
