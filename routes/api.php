<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// http://192.168.0.25:8000/api/users/10/zaw
Route::get('/users/{id}/{name?}', function($id, $name = null){
    return 'Hi users ...  id : ' . $id . ', name : ' . $name  ;
});

// http://192.168.0.25:8000/api/products/10
Route::get('/products/{id?}', function($id = null){
    return 'product id : ' . $id;
});

// http://192.168.0.25:8000/api/students
Route::match(['get', 'post'], '/students', function(Request $req){
    return 'product id : ' . $req->method();
});

// http://192.168.0.25:8000/api/posts
Route::any('/posts', function(Request $req){
    return 'Requested method is : ' . $req->method();
});


//