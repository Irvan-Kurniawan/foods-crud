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
Route::get('/delete', ['as'=>'delete',function() {
   return view('delete');
}]);
Route::get('/update', ['as'=>'update',function() {
   return view('update');
}]);
Route::get('/logout', ['as'=>'logout',function() {
   return view('logout');
}]);
Route::get('/addfood', ['as'=>'addfood',function() {
   return view('addfood');
}]);
Route::get('/addingfood', ['as'=>'addingfood',function() {
   return view('addingfood');
}]);
Route::get('/updatingfood', ['as'=>'updatingfood',function() {
   return view('updatingfood');
}]);
// Route::get('foods',function() {
//    return redirect()->route('testing');
// });
