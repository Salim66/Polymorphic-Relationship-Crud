<?php

use App\Models\Product;
use App\Models\Staff;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});



/*
|--------------------------------------------------------------------------
| POLYMORPHIC RELATIONSHIP
|--------------------------------------------------------------------------
*/

Route::get('/create', function(){

    // $staff = Staff::findOrFail(1);
    $product = Product::findOrFail(1);
    $product->photo()->create(['path' => 'example_2.jpg']);

});

