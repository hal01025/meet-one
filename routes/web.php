<?php

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

Route::get('/', 'TopController@index')->name('top');


// ユーザ登録
Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

// ログイン認証
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

//コミュニティ操作関連
Route::group(['middleware' => ['auth']], function () {
    Route::get('communities', 'CommunityController@index');
    Route::resource('communities', 'CommunityController');
});


//フレンド登録関連
Route::group(['middleware' => ['auth']], function () {
    Route::resource('followerlists', 'FolloweractionController', ['only' => ['index', 'show']]);
    Route::resource('followinglists', 'FollowingactionController', ['only' => ['index', 'show']]);
    
    /*Route::group(['prefix' => 'users/{id}'], function () {
        Route::post('action', 'FriendactionController@store')->name('user.follow');
        Route::delete('unaction', 'FriendactionController@destroy')->name('user.unfollow');
        Route::get('friend', 'FriendactionController@followings')->name('users.followings');
        Route::get('', 'FriendactionController@followers')->name('users.followers');
    });*/
});