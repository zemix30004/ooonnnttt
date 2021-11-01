<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Address;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PagesController::class, 'index']);

Route::get('/about', [PagesController::class, 'about']);

Route::get('/services', [PagesController::class, 'services']);

Route::resource('posts', 'App\Http\Controllers\PostsController');
// Route::get('/about', [PagesController::class, 'index']);

// Route::get('/users/{id}', function ($id) {
//     return "This is user" . $id;
// });

// Route::get('/users/{id}/{name}', function ($id, $name) {
//     return "This is user" . $name . "with an id of" . $id;
// });

// Route::get('/insert', function () {

//     $user = User::findOrFail(1);

//     $address = new Address(['name' => '21344erertertr']);

//     $user->address()->save($address);
// });

// Route::get('/update', function () {

//     $address = Address::whereUserId(1)->first();

//     $address->name = "Updated England";

//     $address->save();
// });

// Route::get('/read', function () {

//     $user = User::findOrFail(1);

//     echo $user->address->name;
// });

// Route::get('/delete', function () {

//     $user = User::findOrFail(1);

//     $user->address()->delete();

//     return "done";
// });
