<?php

use App\Address;
use App\User;
use Carbon\Factory;
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

Route::get('/user', function () {

    // // Factory(\App\User::class, 5)->create();
    // \App\Address::create([
    //     'user_id' => 1,
    //     'country' => 'Indonesia'
    // ]);
    // \App\Address::create([
    //     'user_id' => 2,
    //     'country' => 'Malaysia'
    // ]);
    // \App\Address::create([
    //     'user_id' => 3,
    //     'country' => 'Singapore'
    // ]);
    // $user = factory(App\User::class)->create();
    // $address = new \App\Address([
    //     'country' => 'SG'
    // ]);

    // $address->user()->associate($user);
    // $address->save();

    // // Address::create([
    // //     'uid' => $user->id,
    // //     'country' => 'Indonesia'
    // // ]);

    // $user->address()->create([
    //     'country' => 'Indonesia'
    // ]);
    // $users = User::all();

    $addresses = Address::with('user')->get();
    return view('user', compact('addresses'));
});