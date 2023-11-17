<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('listings');
});
Route::get('/hello', function () {
    return '<h1>Hello guys</h1>';
});

Route::get("/posts/{id}", function($id){
    return response('Post ' . $id);
})->where('id', '[0-9]+');

Route::get("/search", function(Request $request){
    return $request-> name . ' ' . $request->city;
});