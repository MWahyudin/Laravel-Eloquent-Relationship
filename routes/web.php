<?php

use App\Address;
use App\Post;
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

    // $users = User::with('addresses')->get();
    // $users[2]->addresses()->create([
    //    'country' => 'Portugal' 
    // ]);

    // $addresses = Address::with('user')->get();
    // $users = User::get(); // too much queries
    $users = User::with('posts')->get();
    // $users = User::has('posts', '>=', 2)->with('posts')->get(); // hhave a post
    // $users = User::doesntHave('posts')->with('posts')->get(); // doesnt have a post
    // $users[0]->posts()->create([
    //     'title' => 'hasmnypost one'
    // ]);
    return view('users.index', compact('users'));
});

Route::get('/posts', function () {
    // Post::create([
    //     'user_id' => 1,
    //     'title' => 'title one'
    // ]);
    // Post::create([
    //     'user_id' => 2,
    //     'title' => 'title twop'
    // ]);
    // Post::create([
    //     'user_id' => 3,
    //     'title' => 'title tree'
    // ]);
    // Post::create([
    //     'user_id' => 4,
    //     'title' => 'title four'
    // ]);

    $posts = Post::get();
    // Post::create([
    //     'title' => 'hasMany relationship'
    // ]);
    // dd($posts[4]->user);
    // $users = User::with('posts')->get();
    return view('posts.index', compact('posts'));
});