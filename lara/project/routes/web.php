<?php

use App\Http\controllers\BasicController;
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

    Route::get('/',function(){
        $data=['name'=>'amru'];
        return view('welcome',$data);

    });


Route::get('/',action:[BasicController::class.'home'])->name("home");
Route::get('/',function(){
   
    return view('about');

});
