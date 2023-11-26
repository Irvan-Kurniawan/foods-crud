<?php

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
// Route::get('/foods', ['as'=>'food-all',function() {
//    return view('foods');
// }]);
// Route::get('foods',function() {
//    return redirect()->route('food-all');
// });
Route::get('/foods', ['as'=>'foods',function() {
   return view('foods');
}]);

// Route::get('foods',function() {
//    return redirect()->route('testing');
// });
